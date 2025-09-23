<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Media;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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
    public function store(Request $request, $id)
    {
        $request->validate([
            'content' => 'nullable|string|max:255',
            'path'   => 'nullable|array',
            'path.*' => 'nullable|mimes:jpg,png,jpeg,mp4|max:2048',
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'post_id' => $id,
            'user_id' => Auth::id(),
        ]);

        if ($request->hasFile('path')) {
            foreach($request->file('path') as $file){
                $path = $file->store('media', 'public');
                Media::create([
                    'type' => 'comment',
                    'path' => $path,
                    'post_id' => $id,
                    'comment_id' => $comment->id,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Commentaire envoyé avec succès');
    }


        // $posts = Post::with(['users', 'medias', 'comments'])->orderByRaw("CASE WHEN id = ? THEN 0 ELSE 1 END", [$comment->post_id])->inRandomOrder()->get();

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
