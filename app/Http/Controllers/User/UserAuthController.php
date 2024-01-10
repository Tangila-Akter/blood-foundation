<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Developer;

class UserAuthController extends Controller
{
    public function register(){
        return view('frontend.pages.register');
    }
    public function store_register(Request $request){
        $user=new User();
        $user->email=$request->email;
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->password=Hash::make($request->password);
        $user->save();
        $prefix='B';
        $generate=str_pad($user->id,'9','0',STR_PAD_LEFT);
        $user->account_id=$prefix.$generate;
        $user->save();
        return redirect()->route('login');
    }
    public function store_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
       /* if (is_numeric($request->email)){
            Auth::attempt(['phone'=>$request->email,'password'=>$request->get('email')]);
            return redirect()->intended(RouteServiceProvider::HOME);
        }else{
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }

        return redirect("login");*/
        if (is_numeric($request->email)){
            $credential=['phone'=>$request->email,'password'=>$request->password];
            if (Auth::attempt($credential)){
            return redirect()->intended(RouteServiceProvider::HOME);
            }
            return redirect()->route('login');

        }elseif(!is_numeric($request->email)){
            $credential1=['email'=>$request->email,'password'=>$request->password];
            if (Auth::attempt($credential1)){
            return redirect()->intended(RouteServiceProvider::HOME);
            }
            return redirect()->route('login');
        }
    }
    public function logout(){


        Auth::logout();

        return redirect('login');

    }
    // public function home(){
    //     $developers=Developer::all();
    //     return view('frontend.pages.education',['developers'=>$developers]);
    // }
    public function home(){
        $developers=Developer::all();
        return view('frontend.pages.profile',['developers'=>$developers]);
    }
    public function login(){
        return view('frontend.pages.login');
    }
}

