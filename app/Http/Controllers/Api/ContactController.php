<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function index(ContactRequest $request) {
        Mail::to('your.email@example.com')->send(new Contact($request->validated()));

        return response()->json(['success' => true], 201);
    }
}
