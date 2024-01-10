<?php

namespace App\Http\Controllers\Foundation;

use App\Models\FoundationContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FoundationDashboardController extends Controller
{
    public function dashboard(){
        return view('foundation.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('foundation')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('foundation.login');
    }
    public function contact(){
        $contacts=FoundationContactUs::all();
        return view('foundation.contact',compact('contacts'));
    }
}
