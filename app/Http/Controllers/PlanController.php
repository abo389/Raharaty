<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Traits\ApiResponse;

class PlanController extends Controller
{
    use ApiResponse;
    function index() {
        $plans = Plan::all();
        return $this->success(200, "all plans", $plans);
    }
}
