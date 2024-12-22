<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    public function test_api_contact_returns_successful(): void
    {
        $response = $this->postJson('/api/contact', [
            "name" => "hamada",
            "email" => "hamada@gmail.com",
            "msg" => "hamada is the best"
        ]);

        $response->assertStatus(200);
    }
    
    public function test_api_contact_returns_success_message(): void
    {
        $response = $this->postJson('/api/contact', [
            "name" => "hamada",
            "email" => "hamada@gmail.com",
            "msg" => "hamada is the best"
        ]);

        $response->assertStatus(200);
        $response->assertJson(["message" => "message send successfully!"]);
    }

    public function test_api_contact_returns_invalid(): void
    {
        $response = $this->postJson('/api/contact', [
            "name" => "hamada",
            "email" => "hamada@gmail.com",
            "msg" => ""
        ]);

        $response->assertStatus(422);
    }

    public function test_api_contact_store_in_database(): void
    {
        $response = $this->postJson('/api/contact', [
            "name" => "hamada",
            "email" => "hamada@gmail.com",
            "msg" => "hamada is the best"
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseCount("contacts", 1);
    }
}
