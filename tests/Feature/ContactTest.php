<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->post('/store', ['name' => 'Shariful Islam', 'mobile' => '01854103003', 'email' => 'example@example.com']);
        $response->assertStatus(302);
    }
}
