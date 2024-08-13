<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        if (Auth::user()) {
            $contacts = contact::all();
            return view('contact', compact('contacts'));
        } else {
            return view('contact');
        }
    }

    public function store()
    {
        request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required']
        ]);
        contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message')
        ]);

        return redirect('/');
    }

    public function destroy(contact $contact)
    {
        //authorize
        $contact->delete();
        return redirect('/contact')->with('success', 'Contact deleted successfully.');
    }
}
