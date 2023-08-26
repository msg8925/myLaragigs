<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show login form 
    public function login() {

        return view('users.login', [

        ]);
    }

    // Authenticate user i.e. log the user in 
    public function authenticate(Request $request) {

        $formFields = $request->validate([

            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {

            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
    
    // Log out User
    public function logout(Request $request) {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    // Show user register form 
    public function create() {

        return view('users.register');
    }


    // Create the new user 
    public function store(Request $request) {

        // create new user in db
        $formFields = $request->validate([

            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login New User
        auth()->login($user);

        return redirect('/');

    }
}
