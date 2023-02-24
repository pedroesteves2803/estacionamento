<?php

namespace App\Http\Controllers\parking;

use App\Actions\Fortify\LoginNewUserParkingAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthParkingAdminController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('authParking.login');
    }

    public function store(Request $request, LoginNewUserParkingAdmin $creator)
    {
        $creator->create($request->all());

        return redirect()->route('login.adm.parking');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
