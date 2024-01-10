<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Foundation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FoundationAuthController extends Controller
{
    public function login()
    {
        return view('foundation.login');
    }

    public function save_login(Request $request)
    {
        if (Auth::guard('foundation')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('foundation.dashboard'))->with('success', 'Login successfully completed');
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function contact(){

        return view('foundation.test');
    }

    public function register()
    {
        return view('foundation.register');
    }

    public function save_register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|max:64'
        ]);

        $input = $request->only(['name','mobile','email']);

        $input['register_no'] = generateUniqueCode(9);

        if($request->has('password')){
            $input['password'] = Hash::make($request->password);
        }

        if($foundation = Foundation::create($input)){
            Auth::guard('foundation')->login($foundation);
            return redirect()->intended(route('foundation.dashboard'))->with('success', 'Register successfully completed. Now update your profile until account verified');
        }

        return back()->with('error', 'Something went to wrong. Please try again later.');
    }
}
