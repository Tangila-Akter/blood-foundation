<?php

namespace App\Http\Controllers\Admin;

use App\Models\Village;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\VillageTranslation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repository\VillageRepository;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.villages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.villages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return VillageRepository::create($request);
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
        $village = Village::findOrFail($id);
        return view('admin.villages.edit', compact('village'));
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
        return VillageRepository::update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return VillageRepository::delete($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return view('admin.villages.delete', compact('id'));
    }



    public function get_data(Request $request){
        $datas = VillageRepository::get();

        if($request->has('division_id') || $request->has('district_id') || $request->has('upazilla_id') || $request->has('union_id')){
            $datas = VillageRepository::get($request);
        }

        
        return view('admin.villages.data', compact('datas'));
    }

    public function translation($id, $lang_id)
    {
        $village = Village::findOrFail($id);
        $language = Language::find($lang_id);

        if($language != null){
            $translation = VillageTranslation::where('village_id', $id)->where('language_id', $lang_id)->first();
            return view('admin.villages.translation',compact('village','language', 'translation'));
        }else{
            return response()->json(['error' => 'You Have No Language Active.Someting went to wrong. please try again!']);
        }
       
    }

    public function save_translation(Request $request, $id, $lang_id)
    {
        
        $input = $request->except('_token');

        $input['village_id'] = $id;
        $input['language_id'] = $lang_id;
        

        if(VillageTranslation::updateOrCreate(['language_id' => $lang_id, 'village_id' => $id], $input)){
            return response()->json(['success' => 'Village Transalation updated successfully done!']);

        }else{
            return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
        }
        
    }


    public function all_translation(Request $request, $id)
    {
        $all_villages = VillageRepository::get();

        if($request->has('union_id')){
            $all_villages = VillageRepository::get($request);
        }

        $language = Language::findOrFail($id);


        $villages = $all_villages->map(function($village) use ($language){
            $translation = VillageTranslation::where('village_id', $village->id)->where('language_id', $language->id)->first();
            return [
                'id' => $village->id,
                'title' => $translation->title ?? $village->title,
            ];
        });


        return view('admin.villages.all-translation',compact('villages','language'));
        
    }


    public function save_all_translation(Request $request, $id)
    {
       
        $language_id = $id;
        $total_request = count($request->id);

        DB::beginTransaction();
        for ($i=0; $i < $total_request; $i++) { 
            $input['language_id'] = $language_id;
            $input['village_id'] = $request->id[$i];
            $input['title'] = $request->title[$i];
    
            VillageTranslation::updateOrCreate(['language_id' => $language_id, 'village_id' => $input['village_id']], $input);
        }
        DB::commit();

        return response()->json(['success' => 'All Village Transalation updated successfully done!']);
    }
}
