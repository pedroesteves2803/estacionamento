<?php

namespace App\Actions\Fortify;

use App\Contracts\LoginNewUserParkingAdmin as ContractsLoginNewUserParkingAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginNewUserParkingAdmin implements ContractsLoginNewUserParkingAdmin
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $credentials = Validator::make($input, [
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ])->validate();

        dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            dd('logado');
        }

        dd('erro');
    }
}
