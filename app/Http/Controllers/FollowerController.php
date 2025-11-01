<?php

namespace App\Http\Controllers;
use App\Enums\NotificationType;

use App\Models\Follower;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewFollowerNotification;

class FollowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(Request $request, User $target)
    {
        // L'utilisateur connecté
        $user = Auth::user();

        // Empêche de se suivre soi-même
        if ($user->id === $target->id) {
            return response()->json(['error' => 'Impossible de se suivre soi-même'], 400);
        }

        // Vérifie si le follow existe déjà
        $exists = Follower::where('user_id', $user->id)
                          ->where('target_id', $target->id)
                          ->exists();

        if ($exists) {
            return response()->json(['message' => 'Déjà suivi'], 200);
        }

        // Création du follow
        Follower::create([
            'user_id' => $user->id,
            'target_id' => $target->id,
        ]);

        Notification::create([
            'type' => NotificationType::FOLLOWER,
            'message' => auth()->user()->name .  " à commencé à vous suivre.",
            'sender_id' => $target->id,
            'receiver_id' =>Auth::id(),
        ]);

         $usersMayKnows = User::where('id', '!=', Auth::id())->whereNotIn('id', function($query){
            $query->select('target_id')->from('followers')->where('user_id', Auth::id());
        })->limit(7)->inRandomOrder()->get();


        return view('social.components.followers', compact('usersMayKnows'))->with('success', 'personne suivi');
    }


    /**
     * Display the specified resource.
     */
    public function show(Follower $follower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Follower $follower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Follower $follower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Follower $follower)
    {
        //
    }

    public function followerByPost(User $target){
                // L'utilisateur connecté
        $user = Auth::user();

        // Empêche de se suivre soi-même
        if ($user->id === $target->id) {
            return response()->json(['error' => 'Impossible de se suivre soi-même'], 400);
        }

        // Vérifie si le follow existe déjà
        $exists = Follower::where('user_id', $user->id)
                          ->where('target_id', $target->id)
                          ->exists();

        if ($exists) {
            return response()->json(['message' => 'Déjà suivi'], 200);
        }

        // Création du follow
        Follower::create([
            'user_id' => $user->id,
            'target_id' => $target->id,
        ]);

        Notification::create([
            'type' => NotificationType::FOLLOWER,
            'message' => auth()->user()->name .  " à commencé à vous suivre.",
            'sender_id' => $target->id,
            'receiver_id' =>Auth::id(),
        ]);

        return redirect()->back();
    }

    public function Deletefollower(User $target){
        \App\Models\Follower::where('user_id', Auth::id())
        ->where('target_id', $target->id)
        ->delete();

        Notification::where('sender_id', $target->id)->where('type', 'followers')->delete();

        return redirect()->back();
    }
}
