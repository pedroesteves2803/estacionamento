<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUser extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.list-user');
    }
}
