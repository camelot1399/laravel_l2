<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateFeedback extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_feedback()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $data = [
            'name' => 'Mikhail',
            'description' => 'sddfdsfsdffsdgs sdfsdf sdfdsf'
        ];

        $response = $this->post('/feedback', $data);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
    }
}
