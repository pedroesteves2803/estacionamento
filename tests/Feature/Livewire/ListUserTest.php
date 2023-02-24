<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ListUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ListUserTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ListUser::class);

        $component->assertStatus(200);
    }
}
