<?php

namespace App\Http\Livewire;

use App\Models\ParkingAdmin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListAdminUsers extends Component
{
    public $adminUsers;

    public function render()
    {
        $this->adminUsers = ParkingAdmin::where('parking_id', Auth::guard('admin')->user()->parking->id)->get();
        return view('livewire.list-admin-users');
    }
}
