<?php

namespace Database\Seeders;

use App\Models\Parking;
use App\Models\ParkingAdmin;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Parking::factory(10)->create();
        ParkingAdmin::factory(1)->create();
    }
}
