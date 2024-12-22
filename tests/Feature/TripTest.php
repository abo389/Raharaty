<?php

namespace Tests\Feature;

use App\Models\Trip;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TripTest extends TestCase
{
    use RefreshDatabase;
    
    function test_sqlite_work(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $this->assertDatabaseCount("trips", 0);
    }

    function test_api_trips_returns_successful() {
        $response = $this->getJson("/api/trips");

        $response->assertStatus(200);
    }

    function test_api_trips_returns_data_list() {
        $trip = Trip::factory()->create();

        $response = $this->getJson("/api/trips");

        $response->assertStatus(200);
        $this->assertDatabaseCount("trips", 1);
        $response->assertJson(["data" => [$trip->toArray()]]);
    }
}
