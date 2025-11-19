<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    public function singIn()
    {
        if(Auth::guard('web_customers')->check()) {
            return redirect()->route('category_list');
        }
        return view('backend.sign_in');
    }

    public function authetnicateCheck(Request $request)
    {
        $user = Auth::guard('web_customers')->attempt([
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
        if(Auth::guard('web_customers')->check()) {
            return redirect()->route('category_list');
        }
        return view('backend.register');
    }

    public function storeUser(RegisterRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();

        $user = app(Customer::class);
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        
        return redirect()->route('login')->with('success', 'User registered successfully!');
    }

    public function logout()
    {
        Auth::guard('web_customers')->logout();
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
}
