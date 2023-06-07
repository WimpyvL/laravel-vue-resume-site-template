<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(ContactRequest $request) {
        Mail::to('your.email@example.com')->send(new ContactMail($request->validated()));

        return response()->json(['success' => true], 201);
    }
}
