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
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test01(){
        $response = $this->post('/test01',['p1'=>'ouzifa']);
        print_r(json_decode($response->original,true));
        $response->assertStatus(200);
    }
}
