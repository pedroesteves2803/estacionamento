<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationParkingTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_parking_screen_can_be_rendered()
    {
        $response = $this->get('/registrar-estacionamento');

        $response->assertStatus(200);
    }

    public function test_new_parking_and_new_admin_can_register()
    {
        $response = $this->post('/registrar-estacionamento', [
            'name_parking' => 'Teste',
            'cnpj' => '12312313413123',
            'cep' => '08559440',
            'city' => 'Poá',
            'address' => 'Rua bandeirantes',
            'uf' => 'SP',
            'number' => '212',
            'complement' => 'Casa' ,
            'total_vacancies' => '1100',
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->isAuthenticated('admin');
        $response->assertRedirect(route('admin.login.parking'));
    }
}
