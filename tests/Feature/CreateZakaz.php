<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateZakaz extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_zakaz()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $newsData = [
            'name' => 'Mikhail',
            'phone' => '8944377645',
            'email' => 'aa@aa.ru',
            'description' => 'sddfdsfsdffsdgs sdfsdf sdfdsf'
        ];

        $response = $this->post('/zakaz/create', $newsData);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();

    }
}
