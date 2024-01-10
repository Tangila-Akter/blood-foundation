<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function get_dependable_data(Request $request){
        $id = $request->id;
        $type = $request->type;
        $model = $request->model;
        $modelClass = "App\\Models\\$model";
        $datas = $modelClass::where($type, $id)->pluck('title', 'id');
        return response()->json($datas);
    }
}
