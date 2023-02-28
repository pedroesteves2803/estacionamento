<?php

namespace App\Contracts;

use App\Models\Parking;

interface CreateNewUserParkingAdmin
{
    public function create(array $input, Parking $parking);
}
