<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Upazilla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UpazillaTranslation;
use App\Http\Controllers\Controller;
use App\Repository\UpazillaRepository;
use App\Http\Requests\UpazillaRequest;

class UpazillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.upazillas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upazillas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpazillaRequest $request)
    {
        return UpazillaRepository::create($request);
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
        $upazilla = Upazilla::findOrFail($id);
        return view('admin.upazillas.edit', compact('upazilla'));
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
        return UpazillaRepository::update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return UpazillaRepository::delete($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return view('admin.upazillas.delete', compact('id'));
    }



    public function get_data(Request $request){
        $datas = UpazillaRepository::get();

        if($request->has('division_id') || $request->has('district_id')){
            $datas = UpazillaRepository::get($request);
        }

        return view('admin.upazillas.data', compact('datas'));
    }

    public function translation($id, $lang_id)
    {
        $upazilla = Upazilla::findOrFail($id);
        $language = Language::find($lang_id);

        if($language != null){
            $translation = UpazillaTranslation::where('upazilla_id', $id)->where('language_id', $lang_id)->first();
            return view('admin.upazillas.translation',compact('upazilla','language', 'translation'));
        }else{
            return response()->json(['error' => 'You Have No Language Active.Someting went to wrong. please try again!']);
        }

    }

    public function save_translation(Request $request, $id, $lang_id)
    {

        $input = $request->except('_token');

        $input['upazilla_id'] = $id;
        $input['language_id'] = $lang_id;


        if(UpazillaTranslation::updateOrCreate(['language_id' => $lang_id, 'upazilla_id' => $id], $input)){
            return response()->json(['success' => 'Upazilla Transalation updated successfully done!']);

        }else{
            return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
        }

    }


    public function all_translation(Request $request, $id)
    {
        $all_upazillas = UpazillaRepository::get();

        if($request->has('district_id')){
            $all_upazillas = UpazillaRepository::get($request);
        }

        $language = Language::findOrFail($id);


        $upazillas = $all_upazillas->map(function($upazilla) use ($language){
            $translation = UpazillaTranslation::where('upazilla_id', $upazilla->id)->where('language_id', $language->id)->first();
            return [
                'id' => $upazilla->id,
                'title' => $translation->title ?? $upazilla->title,
            ];
        });


        return view('admin.upazillas.all-translation',compact('upazillas','language'));

    }


    public function save_all_translation(Request $request, $id)
    {

        $language_id = $id;
        $total_request = count($request->id);

        DB::beginTransaction();
        for ($i=0; $i < $total_request; $i++) {
            $input['language_id'] = $language_id;
            $input['upazilla_id'] = $request->id[$i];
            $input['title'] = $request->title[$i];

            UpazillaTranslation::updateOrCreate(['language_id' => $language_id, 'upazilla_id' => $input['upazilla_id']], $input);
        }
        DB::commit();

        return response()->json(['success' => 'All Upazilla Transalation updated successfully done!']);
    }
}
