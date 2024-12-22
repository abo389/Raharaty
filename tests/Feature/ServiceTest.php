<?php

namespace Tests\Feature\Models;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    use RefreshDatabase;
    function test_api_services_returns_successful(): void
    {
        $response = $this->getJson('/api/services');

        $response->assertStatus(200);
    }
    function test_api_services_returns_data_list()
    {
        $trip = Service::factory()->create();

        $response = $this->getJson("/api/services");

        $response->assertStatus(200);
        $this->assertDatabaseCount("services", 1);
        $response->assertJson(["data" => [$trip->toArray()]]);
    }
}
