<?php

namespace Tests\Feature\Models;

use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestimonialTest extends TestCase
{
    use RefreshDatabase;
    public function test_api_testimonials_returns_successful(): void
    {
        $response = $this->get('/api/testimonials');

        $response->assertStatus(200);
    }

    public function test_api_testimonials_returns_valid_data(): void
    {
        $testimonial = Testimonial::factory()->create();
        $response = $this->get('/api/testimonials');

        $response->assertStatus(200);
        $response->assertJson(["data" => [$testimonial->toArray()]]);
    }
}
