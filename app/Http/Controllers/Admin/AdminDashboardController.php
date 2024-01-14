<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazilla;
use App\Models\Union;

class AdminDashboardController extends Controller
{
    public function dashboard(){
        $total = [];
        $total['division'] = Division::count();
        $total['district'] = District::count();
        $total['upazila'] = Upazilla::count();
        $total['union'] = Union::count();
        return view('admin.dashboard',compact('total'));
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
