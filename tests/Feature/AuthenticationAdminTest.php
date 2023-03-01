<?php

namespace Tests\Feature;

use App\Models\ParkingAdmin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationAdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_admin_screen_can_be_rendered()
    {
        $response = $this->get('/login-administrador');

        $response->assertStatus(200);
    }

    public function test_admin_can_authenticate_using_the_login_screen()
    {
        $user = ParkingAdmin::factory()->create();

        $response = $this->post('/login-administrador', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->isAuthenticated('admin');

        $response->assertRedirect(route('admin.dashboard.parking'));
    }

    public function test_admin_can_not_authenticate_with_invalid_password()
    {
        $user = ParkingAdmin::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
