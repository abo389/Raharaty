<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use ApiResponse;
    function store(ContactRequest $request) {
        $msg = Contact::create($request->validated());
        return $this->success(200, "message send successfully!", $msg);
    }
}
