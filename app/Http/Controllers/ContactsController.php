<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMailSended;
use Illuminate\Support\Facades\Mail;


class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'message'));

    	Mail::to(config('laracarte.adminSupportMail'))
            ->send(new ContactMailSended($message));

    	flashy('Mail sent ! Wait for a response');
    	return redirect()->route('rootPath');
    }
}
