<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'cnpj' => '1232132131',
            'cep' => 'teste',
            'city' => 'teste',
            'address' => 'teste',
            'uf' => 'teste',
            'number' => 'etste',
            'complement' => 'teste',
            'total_vacancies' => 1100,
        ];
    }
}
