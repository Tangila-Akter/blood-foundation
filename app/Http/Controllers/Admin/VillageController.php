<?php

namespace App\Http\Controllers\Admin;

use App\Models\Village;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\VillageTranslation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repository\VillageRepository;
use App\Traits\ViewDirective;
use App\Interfaces\VillageInterface;
use App\Models\Union;

class VillageController extends Controller
{
    protected $path;
    protected $interface;
    use ViewDirective;
    public function __construct(VillageInterface $interface)
    {
        $this->path = 'admin.villages';
        $this->interface = $interface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->interface->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->interface->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->interface->store($request);
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
        return $this->interface->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->interface->destroy($id);
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

    public function find_ward(Request $request)
    {
        // return $request->union;s
        $data = Union::getThisWard($request->union);

        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm" id="ward" name="ward" onchange="getSubmit()">
            <option value="">-- Select One --</option>';
            foreach($data as $v)
            {
                $check = Village::where('ward_id',$v->id)->count();
                if($check == 0)
                {
                    $output.='<option value="'.$v->id.'">'.$v->title.' No Ward</option>';
                }
            }
            $output.='</select>';

            return $output;
        }
        else
        {
            return '<b class="text-danger">No Ward Found!</b>';
        }
    }
    public function find_all_ward(Request $request)
    {
        // return $request->union;s
        $data = Union::getThisWard($request->union);

        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm" id="ward" name="ward" onchange="getAllVillages()">
            <option value="">-- Select One --</option>';
            foreach($data as $v)
            {
                $output.='<option value="'.$v->id.'">'.$v->title.' No Ward</option>';
            }
            $output.='</select>';

            return $output;
        }
        else
        {
            return '<b class="text-danger">No Ward Found!</b>';
        }
    }

    public function get_villages(Request $request)
    {
        return $this->interface->get_villages($request->ward);
    }

    public function all_village(Request $request)
    {
        return $this->interface->all_village($request->ward_id);
    }

    public function load_villages(Request $request)
    {
        return $this->interface->load_villages($request->ward);
    }
}
