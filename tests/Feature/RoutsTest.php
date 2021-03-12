<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_post_method_return_success()
    {
        $response = $this->post('/');

        $response->assertStatus(200);
    }

    public function test_put_method_return_success()
    {
        $response = $this->put('/');

        $response->assertStatus(200);
    }

    public function test_patch_method_return_success()
    {
        $response = $this->patch('/');

        $response->assertStatus(200);
    }

    public function test_match_method_return_success()
    {
        $response = $this->delete('/');

        $response->assertStatus(200);
    }

    public function test_any_method_return_success()
    {
        $response = $this->options('/');

        $response->assertStatus(200);
    }
}
