<?php

namespace App\Http\Controllers\parking;

use App\Actions\Fortify\CreateNewUserParkingAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterParkingAdminController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('authParking.register');
    }

    public function store(Request $request, CreateNewUserParkingAdmin $creator)
    {
        $creator->create($request->all());

        return redirect()->route('login.adm.parking');
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
