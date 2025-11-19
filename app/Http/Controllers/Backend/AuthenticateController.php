<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    public function singIn()
    {
        return view('backend.sign_in');
    }

    public function authetnicateCheck(Request $request)
    {
        $user = Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        
        if ($user) {
            return redirect()->route('login')->with('success', 'Login successful!');
        }
        
        return back()->with('error', 'Invalid credentials');
    }

    public function register()
    {
        return view('backend.register');
    }

    public function storeUser(Request $request)
    {
        // dd($request->all());

        $user = app(User::class);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        
        return redirect()->route('login')->with('success', 'User registered successfully!');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
}
