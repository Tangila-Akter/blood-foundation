<?php

namespace App\Repository;

use Exception;
use App\Models\Union;
use App\Models\Village;
use App\Models\District;
use App\Models\Division;
use App\Models\Upazilla;
use App\Models\Ward;
use App\Rules\UniqueTitle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\VillageInterface;
use App\Traits\ViewDirective;

class VillageRepository implements VillageInterface
{

    protected $path;
    use ViewDirective;
    public function __construct()
    {
        $this->path ='admin.villages';
    }
    public function index()
    {
        $param = [];
        $param['division'] = Division::all();
        return $this->view($this->path,'index',$param);
    }

    public function create()
    {
        $param = [];
        $param['division'] = Division::all();
        return $this->view($this->path,'create',$param);
    }

    public function store($request)
    {
        if(count($request->title) > 0)
        {
            for ($i=0; $i < count($request->title) ; $i++)
            {
                $data = array(
                    'division_id' => $request->division,
                    'district_id' => $request->district,
                    'upazilla_id' => $request->upazila,
                    'union_id' => $request->union,
                    'ward_id' => $request->ward,
                    'title' => $request->title[$i],
                    'title_bn' => $request->title_bn[$i],
                    'code' => $request->code[$i],
                );

                Village::create($data);
            }

            return response()->json(['success' => 'Village Created Successfully']);
        }
        else
        {
            return response()->json(['error' => 'Village Not Created!']);
        }
    }

    public function edit($id){

    }

    public function update($request,$id)
    {
        $data = array(
            'title' => $request->title,
            'title_bn' => $request->title_bn,
            'code' => $request->code,
        );

        $insert = Village::find($id)->update($data);
        if($insert)
        {
            return response()->json(['success' => 'Village Updated Successfully']);
        }
        else
        {
            return response()->json(['error' => 'Village Updated Unsuccessfully']);
        }

    }

    public function destroy($id)
    {
        try {
            Village::find($id)->delete();
            return response()->json(['success' => 'Village Deleted Successfully']);
        } catch (\Throwable $th)
        {
            return response()->json(['error' => 'Village Deleted Unsuccessfully']);
        }
    }

    public function restore(){

    }

    public function delete(){

    }

    public function print(){

    }

    public function get_villages($ward)
    {
        $village = Ward::getVillages($ward);
        $ward_info = Ward::find($ward);
        return view($this->path.'.data',compact('village','ward_info'));
    }

    public function all_village($ward)
    {
        $village = Ward::getVillages($ward);
        $ward_info = Ward::find($ward);
        return view($this->path.'.village_by_ward',compact('village','ward_info'));
    }

    public function load_villages($ward)
    {
        $village = Ward::getVillages($ward);
        $ward_info = Ward::find($ward);
        return view($this->path.'.data',compact('village','ward_info'));
    }
}
