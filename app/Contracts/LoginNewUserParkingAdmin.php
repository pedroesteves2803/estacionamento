<?php

namespace App\Contracts;

use App\Models\Parking;

interface LoginNewUserParkingAdmin
{
    public function create(array $input);
}
