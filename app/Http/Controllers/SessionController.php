<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SessionController extends Controller
{
    //
    public function create()
    {
        return view('user.login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:200',
            'password' => 'required|string', Password::default(),
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();

            return redirect('/articles');
        }

        return back()->withErrors([
            'email' => 'credentials not matched',
        ]);

    }

    public function destroy()
    {
        Auth::logout();
        
        return redirect('/articles');
    }

}
