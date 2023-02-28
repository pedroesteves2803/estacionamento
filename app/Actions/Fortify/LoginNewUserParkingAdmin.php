<?php

namespace App\Actions\Fortify;

use App\Contracts\LoginNewUserParkingAdmin as ContractsLoginNewUserParkingAdmin;
use App\Models\Parking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginNewUserParkingAdmin implements ContractsLoginNewUserParkingAdmin
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     */
    public function create(array $input)
    {
        $credentials = Validator::make($input, [
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ])->validate();

        if ($response = Auth::guard('admin')->attempt($credentials)) {
            request()->session()->regenerate();
        }

        return $response;

    }
}
