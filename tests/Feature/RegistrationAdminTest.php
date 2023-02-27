<?php

namespace Tests\Feature;

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
        if (! Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->get('/admin/registrar-administrador');

        $response->assertStatus(200);
    }

    public function test_administration_registration_screen_cannot_be_rendered_if_support_is_disabled()
    {
        if (Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is enabled.');
        }

        $response = $this->get('/admin/registrar-administrador');

        $response->assertStatus(404);
    }

    public function test_new_users_can_register_administration()
    {
        if (! Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->post('/admin/registrar-administrador', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect(route('admin.login.parking'));
    }

    public function test_login_administration()
    {
        $user = User::factory()->create();

        $response = $this->post('/admin/login-administrador', [
            'email' => $user->email,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);

        $response->assertRedirect(route('admin.dashboard.parking'));

    }
}
