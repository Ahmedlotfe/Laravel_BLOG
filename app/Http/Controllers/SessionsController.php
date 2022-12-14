<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;


class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'You provided credentials could not be verified'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');

        // return back()
        //     ->withInput()       // To get back with the old data
        //     ->withErrors([
        //         'email' => 'You provided credentials could not be verified'
        //     ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login')->with('success', 'Goodbye!');
    }
}
