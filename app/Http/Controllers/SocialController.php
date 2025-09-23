<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SocialController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lastPost = Post::with(['users', 'medias', 'comments'])->latest('updated_at')->first();
         $posts = Post::with(['users', 'medias', 'comments'])->where('id', '!=', $lastPost->id)->inRandomOrder()->get();

         return view('index', compact('posts', 'lastPost'));

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
