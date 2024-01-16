<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Carousel::all();
        return view('admin.carousel.index', compact('data'));
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
        $data = new Carousel;
        $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension() ;
         $request->image->move('carousel',$imagename);
         $data->image=$imagename;
         $data->title = $request->title;
         $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show( $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Carousel::find($id);
        return view('admin.carousel.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Carousel::find($id);
        $file = $request->file('image');
        if($file)
        {
            $path = public_path().'/carousel/'.$data->image;
            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($file)
        {
            $imagename=time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/carousel/',$imagename);
            $data->image = $imagename;
        }

        $data->title = $request->title;
        $data->update();
        return redirect()->route('admin.carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Carousel::find($id);
        if (file_exists('carousel/'.$data->image)) {
            unlink('carousel/'. $data->image);
        }
        $data->delete();
        return redirect()->back();
    }
}
