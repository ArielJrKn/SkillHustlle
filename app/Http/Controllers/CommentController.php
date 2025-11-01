<?php

namespace App\Http\Controllers;
use App\Enums\NotificationType;

use App\Models\Comment;
use App\Models\Media;
use App\Models\Post;
use App\Models\Notification;
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

        $post = Post::where('id', $id)->first();

        $request->validate([
            'content' => 'nullable|string|max:255',
            'path'   => 'nullable|array',
            'path.*' => 'nullable|mimes:jpg,png,jpeg,mp4|max:51200',
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'post_id' => $id,
            'type' => 'post',
            'user_id' => Auth::id(),
        ]);
        if (Auth::id() !== $post->user_id){
            Notification::create([
                'type' => NotificationType::COMMENT,
                'message' => auth()->user()->name .  " à commenté votre publication.",
                'sender_id' => $post->user_id,
                'receiver_id' =>Auth::id(),
                'post_id' => $comment->post_id,
            ]);
        }


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

public function replyComment(Request $request, Post $post, Comment $comment)
{
    $request->validate([
        'content' => 'nullable|string|max:255',
        'path'   => 'nullable|array',
        'path.*' => 'nullable|mimes:jpg,png,jpeg,mp4|max:51200',
    ]);

    // Création de la réponse
    Comment::create([
        'content' => $request->content,
        'post_id' => $post->id,
        'type' => 'comment',
        'comment_id' => $comment->id, // référence du commentaire parent
        'user_id' => Auth::id(),
    ]);
        if (Auth::id() !== $comment->users->id) {
            Notification::create([
                'type' => NotificationType::REPLY_COMMENT,
                'message' => auth()->user()->name .  " à répondu votre commentaire.",
                'sender_id' => $comment->users->id,
                'receiver_id' => Auth::id(),
                'comment_id' => $comment->id,
                'post_id' => $comment->post_id,
            ]);
        }

    // Enregistrement des médias liés à la réponse
    if ($request->hasFile('path')) {
        foreach ($request->file('path') as $file) {
            $path = $file->store('media', 'public');
            Media::create([
                'type' => 'comment',
                'path' => $path,
                'post_id' => $post->id,
                'comment_id' => $comment->id,
            ]);
        }
    }

    return redirect()->back()->with('success', 'Réponse envoyée avec succès.');
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
    public function edit(Comment $comment)
    {
        return view('social.editComment', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Comment $comment)
{
    $request->validate([
        'content' => 'required|string|max:255',
        'path'    => 'nullable|array',
        'path.*'  => 'nullable|mimes:jpg,png,jpeg,mp4|max:51200',
    ]);

    // ✅ Mise à jour du commentaire existant
    $comment->update([
        'content' => $request->content,
        'type' => 'post',
    ]);

    // ✅ Si fichiers, on les ajoute
    if ($request->hasFile('path')) {
        foreach ($request->file('path') as $file) {
            $path = $file->store('media', 'public');

            Media::create([
                'type'       => 'comment',
                'path'       => $path,
                'post_id'    => $comment->post_id,
                'comment_id' => $comment->id,
            ]);
        }
    }

    return redirect()->route('social.index')
                     ->with('success', 'Commentaire modifié avec succès');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back()->with('success', 'Commentaire supprimé avec succès');
    }
}
