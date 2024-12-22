<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Traits\ApiResponse;

class ServiceController extends Controller
{
    use ApiResponse;

    function index() {
        $services = Service::all();
        return $this->success(200, "all services", $services);
    }
}
