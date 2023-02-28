<?php

namespace Database\Factories;

use App\Models\ParkingAdmin;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParkingAdminFactory extends Factory
{

    protected $model = ParkingAdmin::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'parking_id' => 1,
        ];
    }

}
