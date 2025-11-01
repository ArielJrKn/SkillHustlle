<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Media;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

class SocialController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Post $id)
    {
        $lastPost = Post::with(['users', 'medias', 'comments', 'likes'])->latest('updated_at')->first();
        $posts = Post::with(['users', 'medias', 'comments', 'likes'])->where('id', '!=', $lastPost->id)->inRandomOrder()->get();
        $usersMayKnows = User::where('id', '!=', Auth::id())->whereNotIn('id', function($query){
            $query->select('target_id')->from('followers')->where('user_id', Auth::id());
        })->limit(7)->inRandomOrder()->get();
        $notifications = Notification::where('sender_id', Auth::id())->orderBy('created_at', 'desc')->get();

        // $usersMayKnows = User::where('id', '!=', Auth::id())->limit(7)->inRandomOrder()->get();
         return view('index', compact('posts', 'lastPost', 'usersMayKnows', 'notifications'));

    }

    public function indexJson()
    {
        $lastPost = Post::with(['users', 'medias', 'comments'])->latest('updated_at')->first();
         $posts = Post::with(['users', 'medias', 'comments'])->where('id', '!=', $lastPost->id)->inRandomOrder()->get();


        return response()->json(['posts' => $posts, 'lastPost' => $lastPost]);

    }


    public function courseDetail()
    {
        return view('social.courseDetail');
    }

    public function certification()
    {
        return view('social.certification');
    }

    public function cours()
    {
        return view('social.cours');
    }

    public function jobs()
    {
        return view('social.jobs');
    }

    public function membres()
    {
        return view('social.membres');
    }

    public function profil()
    {
        return view('commun.userProfileDetail');
    }

    public function detailsPost(Post $post){
        return view('social.detailsPost', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
