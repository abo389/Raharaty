<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use ApiResponse;
    function index() {
        $testimonials = Testimonial::all();
        return $this->success(200, "all testmonials", $testimonials);
    }
}
