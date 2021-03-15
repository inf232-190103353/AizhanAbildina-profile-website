<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_post_id_get_request(){
         $response = $this->get('/post/8');

         $response->assertStatus(200);
    }

    public function test_get_unexisted_post(){
             $response = $this->get('/post/15000');

             $response->assertStatus(404);
    }

    public function test_post_response(){
             $response = $this->get('/post/1');

             $response->assertViewHas('post');
    }
}
