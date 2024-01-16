<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sponsor::all();
        return view('admin.sponsor.index', compact('data'));
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
        $data = new Sponsor;
        $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension() ;
         $request->image->move('sponsor',$imagename);
         $data->image=$imagename;
         $data->link = $request->link;
         $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Sponsor::find($id);
        return view('admin.sponsor.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Sponsor::find($id);
        $file = $request->file('image');
        if($file)
        {
            $path = public_path().'/sponsor/'.$data->image;
            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($file)
        {
            $imagename=time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/sponsor/',$imagename);
            $data->image = $imagename;
        }

        $data->link = $request->link;
        $data->update();
        return redirect()->route('admin.sponsor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sponsor::find($id);
        if (file_exists('sponsor/'.$data->image)) {
            unlink('sponsor/'. $data->image);
        }
        $data->delete();
        return redirect()->back();
    }
}
