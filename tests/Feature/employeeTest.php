<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_getemployee()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function a_post_can_be_create()
    {
        $response = $this->post('/posts',[
            'name' => 'Pablo',
            'email' => 'pablo@gmail.com',
            'admission_date' => '2000-02-24'
        ]);

        $response->assertOk();
        $this->assertCount(1, Post::all());

        $post = Post::first();

        $this->assertEquals($post->name, 'Pablo');
    }
}
