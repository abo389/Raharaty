<?php

namespace Tests\Feature\Models;

use App\Models\Plan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlanTest extends TestCase
{
    use RefreshDatabase;
    public function test_api_plans_returns_successful(): void
    {
        $response = $this->get('/api/plans');

        $response->assertStatus(200);
    }

    public function test_api_plans_returns_valid_data(): void
    {
        $plan = Plan::factory()->create();
        $response = $this->get('/api/plans');

        $response->assertStatus(200);
        $response->assertJson(["data" => [$plan->toArray()]]);
    }
}
