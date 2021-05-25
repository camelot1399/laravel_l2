<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateOrder extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_order()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $newsData = [
            'name' => 'Mikhail',
            'phone' => '8944377645',
            'email' => 'aa@aa.ru',
            'description' => 'sddfdsfsdffsdgs sdfsdf sdfdsf'
        ];

        $response = $this->post('/order/create', $newsData);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();

    }
}
