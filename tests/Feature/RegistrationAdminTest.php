<?php

namespace Tests\Feature;

use App\Models\Parking;
use App\Models\ParkingAdmin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;

class RegistrationAdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_administration_registration_screen_renderable()
    {
        $parking = Parking::factory()->create();

        $user = ParkingAdmin::factory()->create();

        $responseLogin = $this->post('/login-administrador', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->isAuthenticated('admin');

        $response = $this->get('admin/registrar-administrador');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register_administration()
    {
        $parking = Parking::factory()->create();

        $user = ParkingAdmin::factory()->create();

        $responseLogin = $this->post('/login-administrador', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->isAuthenticated('admin');

        $response = $this->post('/admin/registrar-administrador', [
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect(route('login.parking'));
    }
}
