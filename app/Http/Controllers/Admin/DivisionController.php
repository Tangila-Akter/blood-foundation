<?php

namespace App\Http\Controllers\Admin;

use App\Models\Division;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DivisionTranslation;
use App\Http\Controllers\Controller;
use App\Repository\DivisionRepository;
use App\Http\Requests\DivisionRequest;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.divisions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.divisions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DivisionRequest $request)
    {
        return DivisionRepository::create($request);
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
        $division = Division::findOrFail($id);
        return view('admin.divisions.edit', compact('division'));
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
        return DivisionRepository::update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return DivisionRepository::delete($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return view('admin.divisions.delete', compact('id'));
    }



    public function get_data(){
        $datas = DivisionRepository::get();
        return view('admin.divisions.data', compact('datas'));
    }

    public function translation($id, $lang_id)
    {
        $division = Division::findOrFail($id);
        $language = Language::find($lang_id);

        if($language != null){
            $translation = DivisionTranslation::where('division_id', $id)->where('language_id', $lang_id)->first();
            return view('admin.divisions.translation',compact('division','language', 'translation'));
        }else{
            return response()->json(['error' => 'You Have No Language Active.Someting went to wrong. please try again!']);
        }

    }

    public function save_translation(Request $request, $id, $lang_id)
    {

        $input = $request->except('_token');

        $input['division_id'] = $id;
        $input['language_id'] = $lang_id;


        if(DivisionTranslation::updateOrCreate(['language_id' => $lang_id, 'division_id' => $id], $input)){
            return response()->json(['success' => 'Division Transalation updated successfully done!']);

        }else{
            return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
        }

    }


    public function all_translation($id)
    {
        $all_divisions =  DivisionRepository::get();
        $language = Language::findOrFail($id);


        $divisions = $all_divisions->map(function($division) use ($language){
            $translation = DivisionTranslation::where('division_id', $division->id)->where('language_id', $language->id)->first();
            return [
                'id' => $division->id,
                'title' => $translation->title ?? $division->title,
            ];
        });


        return view('admin.divisions.all-translation',compact('divisions','language'));

    }


    public function save_all_translation(Request $request, $id)
    {

        $language_id = $id;
        $total_request = count($request->id);

        DB::beginTransaction();
        for ($i=0; $i < $total_request; $i++) {
            $input['language_id'] = $language_id;
            $input['division_id'] = $request->id[$i];
            $input['title'] = $request->title[$i];

            DivisionTranslation::updateOrCreate(['language_id' => $language_id, 'division_id' => $input['division_id']], $input);
        }
        DB::commit();

        return response()->json(['success' => 'All Division Transalation updated successfully done!']);
    }
}
