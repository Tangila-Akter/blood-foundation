<?php

namespace App\Http\Controllers\Admin;

use App\Models\District;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DistrictTranslation;
use App\Http\Controllers\Controller;
use App\Repository\DistrictRepository;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.districts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.districts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return DistrictRepository::create($request);
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
        $district = District::findOrFail($id);
        return view('admin.districts.edit', compact('district'));
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
        return DistrictRepository::update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return DistrictRepository::delete($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return view('admin.districts.delete', compact('id'));
    }



    public function get_data(Request $request){
        $datas = DistrictRepository::get();

        if($request->has('division_id')){
            $datas = DistrictRepository::get($request);
        }

        return view('admin.districts.data', compact('datas'));
    }

    public function translation($id, $lang_id)
    {
        $district = District::findOrFail($id);
        $language = Language::find($lang_id);

        if($language != null){
            $translation = DistrictTranslation::where('district_id', $id)->where('language_id', $lang_id)->first();
            return view('admin.districts.translation',compact('district','language', 'translation'));
        }else{
            return response()->json(['error' => 'You Have No Language Active.Someting went to wrong. please try again!']);
        }
       
    }

    public function save_translation(Request $request, $id, $lang_id)
    {
        
        $input = $request->except('_token');

        $input['district_id'] = $id;
        $input['language_id'] = $lang_id;
        

        if(DistrictTranslation::updateOrCreate(['language_id' => $lang_id, 'district_id' => $id], $input)){
            return response()->json(['success' => 'District Transalation updated successfully done!']);

        }else{
            return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
        }
        
    }


    public function all_translation(Request $request, $id)
    {
        $all_districts = DistrictRepository::get();

        if($request->has('division_id')){
            $all_districts = DistrictRepository::get($request);
        }

        $language = Language::findOrFail($id);


        $districts = $all_districts->map(function($district) use ($language){
            $translation = DistrictTranslation::where('district_id', $district->id)->where('language_id', $language->id)->first();
            return [
                'id' => $district->id,
                'title' => $translation->title ?? $district->title,
            ];
        });


        return view('admin.districts.all-translation',compact('districts','language'));
        
    }


    public function save_all_translation(Request $request, $id)
    {
       
        $language_id = $id;
        $total_request = count($request->id);

        DB::beginTransaction();
        for ($i=0; $i < $total_request; $i++) { 
            $input['language_id'] = $language_id;
            $input['district_id'] = $request->id[$i];
            $input['title'] = $request->title[$i];
    
            DistrictTranslation::updateOrCreate(['language_id' => $language_id, 'district_id' => $input['district_id']], $input);
        }
        DB::commit();

        return response()->json(['success' => 'All District Transalation updated successfully done!']);
    }
}
