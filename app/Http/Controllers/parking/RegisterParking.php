<?php

namespace App\Http\Controllers\parking;

use App\Actions\Fortify\CreateNewParking;
use App\Actions\Fortify\CreateNewUserParkingAdmin;
use App\Actions\Fortify\LoginNewUserParkingAdmin;
use App\Exceptions\ErrorCreateParking;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class RegisterParking extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parking.register.register')->layout('layouts.app-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            if($parking = (new CreateNewParking())->create($request->all())){
                (new CreateNewUserParkingAdmin())->create($request->all(), $parking);
                return redirect()->route('login.parking');
            };
        }catch(ErrorCreateParking $e){
            return back()->withErrors([
                'name' => 'Erro ao criar estacionamento, tente novamente!',
            ])->onlyInput('name');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
