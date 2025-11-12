<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Post;
use Livewire\Component;

class SearchGlobal extends Component
{
    public $query = '';
    public $result = [];

    public function updatedQuery()
    {
        $this->search();
    }

    public function search()
    {
        if (strlen($this->query) < 2) {
            $this->result = [];
            return;
        }

        // 🔥 Vérifie que la fonction est bien appelée
         // dd($this->query); // ← active ça une fois pour voir si ça s’exécute

        $users = User::where('name', 'LIKE', "%{$this->query}%")
            ->orWhere('email', 'LIKE', "%{$this->query}%")
            ->get();

        $posts = Post::where('content', 'LIKE', "%{$this->query}%")->get();

        $this->result = [
            'users' => $users,
            'posts' => $posts,
        ];

        // dd($this->result);
    }

    public function render()
    {
        return view('livewire.search-global');
    }

}
