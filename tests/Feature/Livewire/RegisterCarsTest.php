<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\RegisterCars;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterCarsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(RegisterCars::class);

        $component->assertStatus(200);
    }

    public function test_new_cars()
    {
        $this->isAuthenticated('admin');

        $responseLogin = $this->post('/login-administrador', [
            'email' => $user->email,
            'password' => 'password',
        ]);



        $response->assertRedirect(route('login.parking'));
    }
}
