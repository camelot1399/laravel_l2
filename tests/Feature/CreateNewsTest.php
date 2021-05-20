<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateNewsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_success()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $category = Category::factory()->create();

        $newsData = [
            'title' => 'This is title',
            'description' => 'This is description',
            'category_id' => $category->id
        ];

        $response = $this->post('/news/create', $newsData);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
    }

    public function test_invalid_form_without_title()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $category = Category::factory()->create();

        $response = $this->post('/news/create', [
            'description' => 'This is description',
            'category_id' => $category->id
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['title']);
    }

    public function test_invalid_form_with_too_long_title()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $category = Category::factory()->create();

        $response = $this->post('/news/create', [
            'title' => 'dngdkjfjdfnvjnjkdfhsdiuhcsdvdfkdjgsdkjfjsdkfjsdhfjsdvjksdnvjkdsfhsdjfsdjbvjkdsnvkjdsnfjkdsfjkdsnfjkdsnjvkndsjkfjkdsfjkdsnvjdsnvkdsnkfdskf',
            'description' => 'This is description',
            'category_id' => $category->id
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['title']);

    }
}
