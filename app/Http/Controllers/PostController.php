<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Media;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'content' => 'required|string|max:255',
            'path.*' => 'nullable|mimes:jpg,png,jpeg,mp4|max:51200',
        ]);

        if ($request->hasFile('path')) {
            $posts = Post::create([
                    'content' => $request->content,
                    'user_id' => Auth::id(),
            ]);

            foreach ($request->file('path') as $file) {
                $path = $file->store('media', 'public');

                $media = Media::create([
                    'type' => 'post',
                    'path' => $path,
                    'post_id' => $posts->id,
                ]);
            }

        } else {
            // Cas où il n’y a que du texte
            $posts = Post::create([
                'content' => $request->content,
                'user_id' => Auth::id(),
            ]);
        }

        return redirect()->route('social.index')->with('success', 'Post créé avec succès');
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
    public function edit(Post $post)
    {
        return view('social.editPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:255',
             'path'   => 'nullable|array',
            'path.*' => 'nullable|mimes:jpg,png,jpeg,mp4|max:51200',
        ]);
        $posts = Post::findOrFail($post->id);
        if ($request->hasFile('path')) {
            $posts = Post::updateOrCreate([
                    'content' => $request->content,
                    'user_id' => Auth::id(),
            ]);

            foreach ($request->file('path') as $file) {
                $path = $file->store('media', 'public');

                $media = Media::updateOrCreate([
                    'type' => 'post',
                    'path' => $path,
                    'post_id' => $posts->id,
                ]);
            }

        } else {
            // Cas où il n’y a que du texte
            $posts = Post::updateOrCreate([
                'content' => $request->content,
                'user_id' => Auth::id(),
            ]);
        }

        return redirect()->route('social.index')->with('success', 'Post modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
