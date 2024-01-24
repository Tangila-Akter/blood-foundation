<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Developer::all();
        return view('admin.developer.index', compact('data'));
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
        $data = new Developer;
        $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension() ;
         $request->image->move('developer',$imagename);
         $data->image=$imagename;
         $data->name = $request->name;
         $data->Position = $request->Position;
         $data->SocialMediaLink = $request->SocialMediaLink;
         $data->Description = $request->Description;

         $data->bn_name = $request->bn_name;
         $data->bn_Position = $request->bn_Position;
         $data->bn_Description = $request->bn_Description;
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Developer::find($id);
        return view('admin.developer.edit', compact('data'));
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
        $data = Developer::find($id);
        $file = $request->file('image');
        if($file)
        {
            $path = public_path().'/developer/'.$data->image;
            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($file)
        {
            $imagename=time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/developer/',$imagename);
            $data->image = $imagename;
        }

        $data->bn_name = $request->bn_name;
         $data->bn_Position = $request->bn_Position;
         $data->bn_Description = $request->bn_Description;
        $data->update();
        return redirect()->route('admin.developer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Developer::find($id);
        if (file_exists('developer/'.$data->image)) {
            unlink('developer/'. $data->image);
        }
        $data->delete();
        return redirect()->back();
    }
}
