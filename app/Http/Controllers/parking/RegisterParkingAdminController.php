<?php

namespace App\Http\Controllers\parking;

use App\Actions\Fortify\CreateNewUserParkingAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterParkingAdminController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('parking.authParking.register');
    }

    public function store(Request $request)
    {
        (new CreateNewUserParkingAdmin())->create($request->all(), Auth::guard('admin')->user()->parking);

        return redirect()->route('admin.login.parking');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
