<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Health;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Health::all();
        return view('admin.health.index', compact('data'));
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
        $data = new Health;
        $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension() ;
         $request->image->move('health',$imagename);
         $data->image=$imagename;
         $data->name = $request->name;
         $data->bn_name = $request->bn_name;
         $data->text = $request->text;
         $data->bn_text = $request->bn_text;
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
        $data = Health::find($id);
        return view('admin.health.edit', compact('data'));
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
        $data = Health::find($id);
        $file = $request->file('image');
        if($file)
        {
            $path = public_path().'/health/'.$data->image;
            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($file)
        {
            $imagename=time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/health/',$imagename);
            $data->image = $imagename;
        }

        $data->name = $request->name;
         $data->bn_name = $request->bn_name;
         $data->text = $request->text;
         $data->bn_text = $request->bn_text;
        $data->update();
        return redirect()->route('admin.health.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Health::find($id);
        if (file_exists('health/'.$data->image)) {
            unlink('health/'. $data->image);
        }
        $data->delete();
        return redirect()->back();
    }
}
