<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoundationContactUs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Foundation;

class UserFoundationController extends Controller
{
    public function contactFoundation($id){
        $foundation_id=Foundation::find($id)->select('id')->get();
        return view('frontend.pages.contact_foundation',compact('foundation_id'));
    }
    public function contactFoundationUpload($f_id, Request $request){
        $fId=$f_id;
        $cntc=new FoundationContactUs();
        $cntc->name=$request->name;
        $cntc->address=$request->address;
        $cntc->message=$request->message;
        $account_id=User::find(Auth::id())->first();
      // dd($account_id->account_id);
        $cntc->account_id=$account_id->account_id;
       $foundation_id=Foundation::find($fId)->first();
       //dd($foundation_id);
        $cntc->foundation_id=$foundation_id->id;
        $cntc->save();
       return redirect()->back();
    }

}
