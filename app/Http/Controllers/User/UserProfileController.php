<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Models\BloodRequest;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
    public function blood_request(){
        return view('frontend.pages.blood_request');
    }
    public function blood_request_upload(Request $request){

        $blood=new BloodRequest();
        $blood->user_id=Auth::user()->id;
       // $blood->permission='yes';
        $blood->division=$request->division;
        $blood->district=$request->district;
        $blood->upzilla=$request->upzilla;
        $blood->hospital=$request->hospital;
        $blood->patientName=$request->patientName;
        $blood->patientPhone=$request->patientPhone;
        $blood->referenceName=$request->referenceName;
        $blood->referencePhone=$request->referencePhone;
        $blood->bloodGroup=$request->bloodGroup;
        $blood->bagBlood=$request->bagBlood;
        $blood->message=$request->message;
        $blood->save();
        return redirect()->back();

    }
}
