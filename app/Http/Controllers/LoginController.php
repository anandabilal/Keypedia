<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Login';
        return view('login', compact('title'));
    }

    // Authenticate user login
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email_address' => 'required|email',
            'password' => 'required',
        ]);
        
        // Auth::attempt will compare 'password' to the encrypted password (bcrypt('password'))
        // If true, will authorize this user to access routes only available to authorized users
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Will redirect to Home page '/' if successful
            return redirect()->intended('/');
        }
        
        return back()->withErrors('Invalid email address or password.');
    }

    public function logout(Request $request)
    {
        // Will remove user authorization
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}
