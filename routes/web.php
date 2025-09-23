<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SamePageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MediaController;
use Carbon\Carbon;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

// Route pour gérer l'authentification de google------------------------------------------------------------------------------------------------
Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();


    $user = User::updateOrCreate(
        ['email' => $googleUser->getEmail()],
        
        [
            'name' => $googleUser->getName(),
            'password' => bcrypt(uniqid()), // Mot de passe aléatoire
            'google_id' => $googleUser->getId(),
            'avatar' => $googleUser->getAvatar(),
            'email_verified_at' => Carbon::now(),
        ],
    );

    Auth::login($user);

    // si l'utilisateur s'est récemment inscrit
    if ($user->wasRecentlyCreated) {
        return redirect()->route('roleAfterGoogleConnexion');
    }

    

    // Sinon → utilisateur déjà existant
    return redirect()->route('social.index');

})->name('auth.google.callback');

Route::get('/auth/google/redirect', function () {
      // dd(Socialite::driver('google')->redirect()->getTargetUrl());  
    return Socialite::driver('google')->redirect();
})->name('google.login');

// Route pour les pages de d'authentification ------------------------------------------------------------------------------------

Route::controller(AuthController::class)->middleware('auth')->group(function(){
    Route::get('/', 'ShowRegisterForm')->name('registerForm');
    Route::post('/register', 'register')->name('auth.register');
    Route::post('/roleAfterGoogleConnexion', 'role')->name('auth.role');
    Route::get('/roleAfterGoogleConnexion', 'roleAfterGoogleConnexion')->name('roleAfterGoogleConnexion');
    Route::get('/login', 'ShowLoginForm')->name('connexion');
    Route::post('/login', 'login')->name('auth.login');
    Route::post('/logout', 'logout')->name('auth.logout');
    // Route::get('/VerifyEmail', 'verifyEmailForm')->name('auth.verifyEmailForm');
    // Route::get('/VerifyEmail/{token}', 'verify')->name('verify.email');
});



// Route pour affichage des pages de la partie sociale-------------------------------------------------------------------------------

Route::controller(SocialController::class)->middleware('auth')->group(function(){
    Route::get('home', 'index')->name('social.index');
    Route::get('homeJson', 'indexJson')->name('social.indexJson');
    Route::get('/certification', 'certification')->name('social.certification');
    Route::get('/cours', 'cours')->name('social.cours');
    Route::get('/jobs', 'jobs')->name('social.jobs');
    Route::get('/membres', 'membres')->name('social.membres');
    Route::get('/profil', 'profil')->name('social.profil');
    Route::get('/courseDetail', 'courseDetail')->name('social.courseDetail');
});

// Route pour affichage des pages de la partie sociale-------------------------------------------------------------------------------

// Route pour affichage des pages de l'apprenant -----------------------------------------------------------------------------------

Route::controller(StudentsController::class)->group(function(){
    Route::get('/studentsDashboard', 'dashboard')->name('students.dashboard');
    Route::get('/studentscertificate', 'certificate')->name('students.certificate');
    Route::get('/certificationsContent', 'certificationsContent')->name('students.certificationsContent');
    Route::get('/studentsCourseCatalogue', 'courseCatalogue')->name('students.courseCatalogue');
    Route::get('/studentsCourseContainer', 'courseContainer')->name('students.courseContainer');
    Route::get('/studentsCourseContent', 'courseContent')->name('students.courseContent');
    Route::get('/studentsEdit', 'edit')->name('students.edit');
    Route::get('/studentsExercices', 'exercices')->name('students.exercices');
    Route::get('/studentsFavoris', 'favoris')->name('students.favoris');
    Route::get('/studentsRessources', 'ressources')->name('students.ressources');
});

// Route pour affichage des pages de l'apprenant -----------------------------------------------------------------------------------

// Route pour affichage des pages de Formateur------------------------------------------------------------------------------------

Route::controller(TeacherController::class)->group(function(){
    Route::get('/teacherDashboard', 'dashboard')->name('teacher.dashboard');
    Route::get('/teacherCertif', 'certif')->name('teacher.certif');
    Route::get('/teacherCourseDetail', 'courseDetail')->name('teacher.courseDetail');
    Route::get('/teacherCreateCourse', 'createCourse')->name('teacher.createCourse');
    Route::get('/teacherCourses', 'course')->name('teacher.course');
    Route::get('/teacherCoursesEdit', 'courseEdit')->name('teacher.courseEdit');
    Route::get('/teacherStudents', 'students')->name('teacher.students');
    Route::get('/teacherSetting', 'setting')->name('teacher.setting');
    Route::get('/teacherUserDetail', 'usersDetail')->name('teacher.userDetail');
    Route::get('/teacherFeedbacks', 'feedback')->name('teacher.feedback');
    Route::get('/teacherRevenus', 'revenus')->name('teacher.revenus');
    Route::get('/teacherSocial', 'social')->name('teacher.social');

});

// Route pour affichage des pages de Formateur------------------------------------------------------------------------------------


// Route pour affichage des pages de l'entreprise / recruteur -----------------------------------------------------------------------------
    Route::controller(EntrepriseController::class)->group(function(){
        Route::get('/entrepriseDashboard', 'dashboard')->name('entreprise.dashboard');
        Route::get('/entrepriseCandidates', 'candidates')->name('entreprise.candidates');
        Route::get('/entrepriseCreateJob', 'createJob')->name('entreprise.createJob');
        Route::get('/entrepriseJobEdit', 'jobEdit')->name('entreprise.jobEdit');
        Route::get('/entrepriseJobs', 'jobs')->name('entreprise.jobs');
        Route::get('/entrepriseJobsDetail', 'jobsDetail')->name('entreprise.jobsDetail');
        Route::get('/entrepriseEdit', 'edit')->name('entreprise.edit');

    });

// Route pour affichage des pages de l'entreprise / recruteur -----------------------------------------------------------------------------

// route pour affichage des pages de l'admin -----------------------------------------------------------------------------------------
    Route::controller(AdminController::class)->group(function(){
        Route::get('/adminDashboard', 'dashboard')->name('admin.dashboard');
        Route::get('/admincertif', 'certif')->name('admin.certif');
        Route::get('/adminCourses', 'course')->name('admin.course');
        Route::get('/adminCourseDetail', 'courseDetail')->name('admin.courseDetail');
        Route::get('/adminCoursesEdit', 'courseEdit')->name('admin.courseEdit');
        Route::get('/adminCoursesCreate', 'courseCreate')->name('admin.courseCreate');
        Route::get('/adminCourseContent', 'courseContent')->name('admin.courseContent');
        Route::get('/adminGestionUser', 'gestionUser')->name('admin.gestionUser');
        Route::get('/adminJobs', 'jobs')->name('admin.jobs');
        Route::get('/adminJobsDetail', 'jobsDetail')->name('admin.jobsDetail');
        Route::get('/adminUserDetail', 'usersDetail')->name('admin.userDetail');
        Route::get('/adminOrders', 'autres')->name('admin.orders');
    });

// route pour affichage des pages de l'admin -----------------------------------------------------------------------------------------

Route::controller(SamePageController::class)->group(function(){
    Route::get('/userFeedback', 'feedback')->name('feedback');
    Route::get('/userRevenus', 'revenus')->name('revenus');
    Route::get('/userSocial', 'social')->name('social');
    Route::get('/userProfilDetail', 'userProfilDetail')->name('social.userProfilDetail');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(MediaController::class)->group(function(){
    Route::delete('/deleteMedia/{media}', 'destroy')->name('DeleteMedia');
});

Route::controller(PostController::class)->group(function(){
    Route::post('/createPost', 'store')->name('createPost');
    Route::get('/editPost{post}', 'edit')->name('social.editPost');
    Route::put('/update{post}', 'update')->name('social.updatePost');

});


Route::controller(CommentController::class)->group(function(){
    Route::post('/createComment/{id}', 'store')->name('createComment');
});




Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('authRegister');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('authLogin');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});