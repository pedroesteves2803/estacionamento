<?php

namespace App\Http\Livewire;

use App\Models\ParkingAdmin;
use Livewire\Component;

class ListAdminUsers extends Component
{
    public $adminUsers;

    public function render()
    {
        $this->adminUsers = ParkingAdmin::all();
        return view('livewire.list-admin-users');
    }
}
