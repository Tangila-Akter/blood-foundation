<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocalizationController extends Controller
{
    public function setLocale(Request $request)
    {
        App::setLocale($request->locale);
        session()->put('locale',$request->locale);
        return redirect()->back();
    }
}
