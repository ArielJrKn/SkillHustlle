<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;

class AuthController extends Controller
{
    public function roleAfterGoogleConnexion(){
        return view('Auth.role_apres_connexion_google');
    }

    public function role (Request $request): RedirectResponse{
        $request->validate([
            'role' => 'required|string|max:255',
        ]);

        
        $email = User::where('email', Auth::user()->email)->first();

        User::where('id', Auth::id())->update([
                    'role' => $request->role,
                    'email_verified_at' => Carbon::now(),
        ]);

        $user = Auth::user()->fresh();

        switch($user->role){
            case 'apprenant':
                $message = "🎉 Bienvenue sur SkillHustle, {$user->name} !
                Ici, tu n’es pas juste un spectateur, tu viens pour apprendre, progresser et prouver tes compétences.
                Ton rôle, c’est de suivre les formations disponibles, pratiquer avec des projets concrets et montrer ce que tu sais faire.
                Tu vas trouver :

                des cours pour renforcer tes bases,

                des challenges pour tester ton niveau,

                un espace pour partager tes réussites et tes difficultés.
                👉 L’objectif ? Que tu ressortes avec des vraies compétences reconnues et pas juste des notes sur papier.

                🔘 Commence ton premier cours dès maintenant 🚀";
                break;

            case 'formateur':
                $message = "👋 Salut {$user->name}, bienvenue du côté des passeurs de savoir !
                Ici, ton expérience et tes connaissances sont mises en avant pour aider des apprenants motivés à progresser.
                Ton rôle est de créer et publier des cours, accompagner les étudiants, répondre à leurs questions et bâtir ta réputation.
                Tu vas pouvoir :

                mettre en avant tes propres méthodes,

                générer un revenu avec tes cours,

                développer une vraie communauté autour de toi.
                👉 L’objectif ? Te positionner comme une référence dans ton domaine tout en ayant un impact réel.

                🔘 Ajoute ton premier cours et commence à enseigner 📚";
                break;
            case 'entreprise':
                $message = "🚀 Bienvenue à bord, {$user->name} !
                Ici, c’est l’espace où vous pouvez trouver et former les talents qu’il vous faut.
                Votre rôle est simple : publier vos offres d’emploi, repérer les profils adaptés et, si besoin, proposer des formations internes.
                Vous allez pouvoir :

                accéder à un vivier de jeunes motivés et opérationnels,

                organiser vos propres campagnes de recrutement,

                renforcer votre marque employeur en formant directement via SkillHustle.
                👉 L’objectif ? Gagner du temps, réduire vos erreurs de recrutement et trouver les vrais talents.

                🔘 Publiez votre première offre dès aujourd’hui 💼";
                break;
            case 'user':
                $message ="👋 Salut {$user->name}, bienvenue sur SkillHustle !
                Tu viens d’atterrir dans un espace qui mélange apprentissage, partage et opportunités professionnelles.
                Pour l’instant, tu es en mode explorateur : tu regardes, tu découvres, tu testes.
                Tu peux à tout moment choisir ton chemin :

                devenir apprenant si tu veux te former,

                devenir formateur si tu veux partager ton savoir,

                devenir entreprise si tu veux recruter ou former.
                👉 L’objectif ? Te permettre de trouver ta place sur la plateforme, selon tes ambitions.
                ou seulement si tu souhaites trouver un profil ou un talents pour un quelconque projets

                🔘 Choisis ton rôle et commence ton aventure 🌍";
                break;
            default:
                $message = "👋 Bienvenue sur SkillHustle, {$user->name}!";
                break;
        }
            return redirect()->route('social.index')->with('message', $message);
              
    }

    public function ShowRegisterForm(){
        return view('Auth.inscription');
    }

     public function ShowLoginForm(){
        return view('Auth.connexion');
    }

    public function logout(Request $request):RedirectResponse{
        Auth::logout();
        $request->session()->invalidate(); // invalide la session
        $request->session()->regenerateToken(); // évite les attaques CSRF

        return redirect()->route('loginForm');
    }



}
