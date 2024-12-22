<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Traits\ApiResponse;

class TripController extends Controller
{
    use ApiResponse;

    function index()
    {
        $trips = Trip::all();
        return $this->success(200, "all trips", $trips);
    }

}
