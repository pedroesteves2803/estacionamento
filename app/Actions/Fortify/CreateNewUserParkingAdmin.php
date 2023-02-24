<?php

namespace App\Actions\Fortify;

use App\Contracts\CreateNewUserParkingAdmin as ContractsCreateNewUserParkingAdmin;
use App\Models\ParkingAdminUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateNewUserParkingAdmin implements ContractsCreateNewUserParkingAdmin
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
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:parking_admin_users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return ParkingAdminUser::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);
    }
}
