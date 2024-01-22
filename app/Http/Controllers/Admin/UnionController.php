<?php

namespace App\Http\Controllers\Admin;

use App\Models\Union;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\UnionTranslation;
use Illuminate\Support\Facades\DB;
use App\Repository\UnionRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\UnionRequest;

class UnionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.unions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnionRequest $request)
    {
        return UnionRepository::create($request);
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
        $union = Union::findOrFail($id);
        return view('admin.unions.edit', compact('union'));
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
        return UnionRepository::update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return UnionRepository::delete($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return view('admin.unions.delete', compact('id'));
    }



    public function get_data(Request $request){
        $datas = UnionRepository::get();

        if($request->has('division_id') || $request->has('district_id') || $request->has('upazilla_id')){
            $datas = UnionRepository::get($request);
        }


        return view('admin.unions.data', compact('datas'));
    }

    public function translation($id, $lang_id)
    {
        $union = Union::findOrFail($id);
        $language = Language::find($lang_id);

        if($language != null){
            $translation = UnionTranslation::where('union_id', $id)->where('language_id', $lang_id)->first();
            return view('admin.unions.translation',compact('union','language', 'translation'));
        }else{
            return response()->json(['error' => 'You Have No Language Active.Someting went to wrong. please try again!']);
        }

    }

    public function save_translation(Request $request, $id, $lang_id)
    {

        $input = $request->except('_token');

        $input['union_id'] = $id;
        $input['language_id'] = $lang_id;


        if(UnionTranslation::updateOrCreate(['language_id' => $lang_id, 'union_id' => $id], $input)){
            return response()->json(['success' => 'Union Transalation updated successfully done!']);

        }else{
            return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
        }

    }


    public function all_translation(Request $request, $id)
    {
        $all_unions = UnionRepository::get();

        if($request->has('upazilla_id')){
            $all_unions = UnionRepository::get($request);
        }

        $language = Language::findOrFail($id);


        $unions = $all_unions->map(function($union) use ($language){
            $translation = UnionTranslation::where('union_id', $union->id)->where('language_id', $language->id)->first();
            return [
                'id' => $union->id,
                'title' => $translation->title ?? $union->title,
            ];
        });


        return view('admin.unions.all-translation',compact('unions','language'));

    }


    public function save_all_translation(Request $request, $id)
    {

        $language_id = $id;
        $total_request = count($request->id);

        DB::beginTransaction();
        for ($i=0; $i < $total_request; $i++) {
            $input['language_id'] = $language_id;
            $input['union_id'] = $request->id[$i];
            $input['title'] = $request->title[$i];

            UnionTranslation::updateOrCreate(['language_id' => $language_id, 'union_id' => $input['union_id']], $input);
        }
        DB::commit();

        return response()->json(['success' => 'All Union Transalation updated successfully done!']);
    }
}
