<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterCars extends Component
{
    public function render()
    {
        return view('livewire.register-cars')->layout('layouts.app-admin');
    }
}
