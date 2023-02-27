<?php

namespace App\Http\Livewire;

use App\Models\ParkingAdminUser;
use Livewire\Component;

class ListAdminUsers extends Component
{
    public $adminUsers;

    public function render()
    {
        $this->adminUsers = ParkingAdminUser::all();
        return view('livewire.list-admin-users');
    }
}
