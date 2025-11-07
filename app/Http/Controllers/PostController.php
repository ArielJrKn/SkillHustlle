<?php

namespace App\Http\Controllers;
use App\Enums\NotificationType;
use App\Models\Post;
use App\Models\Media;
use App\Models\User;
use App\Models\Follower;
use App\Models\Notification;
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

        $receivers = Follower::where('target_id', Auth::id())->get();


        if ($request->hasFile('path')) {
            $posts = Post::create([
                    'content' => $request->content,
                    'user_id' => Auth::id(),
                    'type' => 'simplePost',
            ]);

            foreach ($request->file('path') as $file) {
                $path = $file->store('media', 'public');

                $media = Media::create([
                    'type' => 'post',
                    'path' => $path,
                    'post_id' => $posts->id,
                ]);
            }

            foreach($receivers as $receiver){
                Notification::create([
                    'type' => NotificationType::POST,
                    'message' => auth()->user()->name . " à fait une nouvelle publication.",
                    'sender_id' => $receiver->user_id,
                    'receiver_id' =>Auth::id(),
                    'post_id' => $posts->id,
                ]);
            }

        } else {
            // Cas où il n’y a que du texte
            $posts = Post::create([
                'content' => $request->content,
                'user_id' => Auth::id(),
                'type' => 'simplePost',
            ]);

            foreach($receivers as $receiver){
                $notification = Notification::create([
                    'type' => NotificationType::POST,
                    'message' => auth()->user()->name .  " à fait une nouvelle publication.",
                    'sender_id' => $receiver->user_id,
                    'receiver_id' =>Auth::id(),
                    'post_id' => $posts->id,
                ]);
            }
        }

        return redirect()->route('social.index')->with([
            'success' => 'Post créer avec succès',
            // 'message_notif' => $notification->message,
        ]);


    }


    /**
     * Display the specified resource.
     */
    public function show(string $post)
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
        // $posts = Post::findOrFail($post->id);
        if ($request->hasFile('path')) {
            $post->update([
                    'content' => $request->content,
                    'user_id' => Auth::id(),
            ]);

            foreach ($request->file('path') as $file) {
                $path = $file->store('media', 'public');

                $media = Media::updateOrCreate([
                    'type' => 'post',
                    'path' => $path,
                    'post_id' => $post->id,
                ]);
            }

        } else {
            // Cas où il n’y a que du texte
            $post->update([
                'content' => $request->content,
                'user_id' => Auth::id(),
            ]);
        }

        return redirect()->route('social.index')->with('success', 'Post modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back()->with('success', 'Post supprimé avec succès');
    }

    public function share(Post $lastPost){
        return view('social.components.post', compact('lastPost'));
    }

    public function sharePost(Request $request, Post $post){
        $request->validate([
            'content' => 'nullable|string|max:255',
        ]);

        $receivers = Follower::where('user_id', Auth::id())->get();


        $posts = Post::create([
            'content' => $request->content,
            'post_id' => $post->id,
            'user_id' => Auth::id(),
            'type' => 'sharePost',
        ]);



        foreach($receivers as $receiver){

            if ($post->user_id === $receiver->target_id) {
                $message = auth()->user()->name .  " à partagé votre publication.";
            }else{
                $message = auth()->user()->name .  " à partagé une publication de {$post->users->name}";
            }
            $notification = Notification::create([
                'type' => NotificationType::POST,
                'message' => $message,
                'sender_id' => $receiver->target_id,
                'receiver_id' => Auth::id(),
                'post_id' => $posts->id,
            ]);
        }

    return redirect()->route('social.index')->with([
            'success' => 'Post partagé avec succès',
            // 'message_notif' => $notification->message,
        ]);;    
    }

}
