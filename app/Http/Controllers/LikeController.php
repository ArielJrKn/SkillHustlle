<?php

namespace App\Http\Controllers;
use App\Enums\NotificationType;

use App\Models\like;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LikeController extends Controller
{
    public function storeLastPost(Post $post){

        $liked = Like::where('user_id', Auth::id())->where('post_id', $post->id)->first();

        if($liked){
            $liked->delete();
            Notification::where('post_id', $post->id)->where('type', 'likePost')->where('receiver_id', Auth::id())->delete();
        }
        else{
             Like::create([
                'type' => 'post',
                'user_id' => Auth::id(),
                'post_id' => $post->id,
            ]);

             if (Auth::id() !== $post->users->id) {
                Notification::create([
                    'type' => NotificationType::LIKE_POST,
                    'message' => auth()->user()->name .  " à aimé votre publication.",
                    'sender_id' => $post->users->id,
                    'receiver_id' =>Auth::id(),
                    'post_id' => $post->id,
                ]);
             }
        }


        $lastPost = Post::with(['users', 'medias', 'comments', 'likes'])->latest('updated_at')->first();
        $posts = Post::with(['users', 'medias', 'comments', 'likes'])->where('id', '!=', $lastPost->id)->inRandomOrder()->get();

        $posts->load('likes');


        return view('social.likeCount', compact('lastPost'));
    }

    public function storeposts(Post $idPost){
        // On enregistre le like

        $liked = Like::where('user_id', Auth::id())->where('post_id', $idPost->id)->first();

        if($liked){
            $liked->delete();
            Notification::where('post_id', $idPost->id)->where('type', 'likePost')->where('receiver_id', Auth::id())->delete();
        }
        else{
             Like::create([
                'type' => 'post',
                'user_id' => Auth::id(),
                'post_id' => $idPost->id,
            ]);


            if (Auth::id() !== $idPost->users->id) {
                Notification::create([
                    'type' => NotificationType::LIKE_POST,
                    'message' => auth()->user()->name .  " à aimé votre publication.",
                    'sender_id' => $idPost->users->id,
                    'receiver_id' =>Auth::id(),
                    'post_id' => $idPost->id,
                ]);
            }
        }
        $post = Post::with('likes')->find($idPost->id);
        $post->load('likes');

        // On compte les likes de CE post
        $likeCount = Like::where('post_id', $idPost->id)->where('type', 'post')->count();

        return view('social.likePost', compact('post'));
    }

    public function storeLastPostComment(Comment $idcomment){

         $liked = Like::where('user_id', Auth::id())->where('comment_id', $idcomment->id)->first();

        if($liked){
            $liked->delete();
            Notification::where('comment_id', $idcomment->id)->where('type', 'likeComment')->where('receiver_id', Auth::id())->delete();

        }
        else{
             Like::create([
                'type' => 'comment',
                'user_id' => Auth::id(),
                'post_id' => $idcomment->post_id,
                'comment_id' => $idcomment->id,
            ]);

            if (Auth::id() !== $idcomment->users->id) {
                Notification::create([
                    'type' => NotificationType::LIKE_COMMENT,
                    'message' => auth()->user()->name .  " à aimé votre commentaire.",
                    'sender_id' => $idcomment->users->id,
                    'receiver_id' =>Auth::id(),
                    'comment_id' => $idcomment->id,
                    'post_id' => $idcomment->post_id,
                ]);
            }

        }   
        $comment = Comment::with('likes')->find($idcomment->id);
        $comment->load('likes');

        return view('social.likeCommentLastPost', compact('comment'));
    }

    public function storeRelyComment(Comment $idComment){

        $liked = Like::where('user_id', Auth::id())->where('comment_id', $idComment->id)->first();

        if($liked){
            $liked->delete();
            Notification::where('comment_id', $idComment->id)->where('type', 'likeComment')->where('receiver_id', Auth::id())->delete();
        }
        else{
             Like::create([
                'type' => 'replyComment',
                'user_id' => Auth::id(),
                'post_id' => $idComment->post_id,
                'comment_id' => $idComment->id,
            ]);
            if (Auth::id() !== $idComment->users->id) {
                Notification::create([
                    'type' => NotificationType::LIKE_COMMENT,
                    'message' => auth()->user()->name .  " à aimé votre commentaire.",
                    'sender_id' => $idComment->users->id,
                    'receiver_id' =>Auth::id(),
                    'comment_id' => $idComment->id,
                    'post_id' => $idComment->post_id,
                ]);
            }

        }   
        $replyComment = Comment::with('likes')->find($idComment->id);
        $replyComment->load('likes');

        return view('social.likeReplyComment', compact('replyComment'));
    }
}
