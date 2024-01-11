<?php
namespace App\Repository;
use App\Interfaces\WardInterface;
use App\Traits\ViewDirective;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazilla;
use App\Models\Ward;
use App\Models\Union;

class WardRepository implements WardInterface{
    use ViewDirective;
    protected $path;
    public function __construct()
    {
        $this->path = 'admin.ward';
    }

    public function index()
    {
        $param = [];
        $param['division'] = Division::all();
        return $this->view($this->path,'index',$param);
    }

    public function get_ward($union)
    {
        $data =[];
        $data['ward'] = Union::getThisWard($union);
        return view($this->path.'.ward',compact('data'));
    }

    public function create()
    {

    }

    public function store($request)
    {
        if(count($request->title) > 0)
        {
            for ($i=0; $i < count($request->title) ; $i++)
            {
                $data = array(
                    'division_id'       => $request->division,
                    'district_id'       => $request->district,
                    'upazilla_id'       => $request->upazila,
                    'union_id'          => $request->union,
                    'title'             => $request->title[$i],
                    'title_bn'             => $request->title_bn[$i],
                );
                Ward::create($data);
            }

            return response()->json(['success' => 'Ward Created Successfully']);
        }
        else
        {
            return response()->json(['error' => 'Ward Not Created!']);
        }
    }

    public function edit()
    {

    }

    public function destroy()
    {

    }

    public function restore()
    {

    }

    public function delete()
    {

    }

    public function print()
    {

    }

    public function find_district($division)
    {
        $data = Division::getDistrict($division);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="district" id="district" onchange="return findUpazila()">
            <option value="">-- Select District --</option>';
            foreach($data as $v)
            {
                $output.='<option value="'.$v->id.'">'.$v->title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">No District Found!</b>';
        }
    }

    public function find_upazila($district)
    {
        $data = District::getUpazila($district);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="upazila" id="upazila" onchange="return findUnion()">
            <option value="">-- Select Upazila --</option>';
            foreach($data as $v)
            {
                $output.='<option value="'.$v->id.'">'.$v->title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">No Upazila Found!</b>';
        }
    }

    public function find_union($upazila)
    {
        $data = Upazilla::getUnion($upazila);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="union" id="union" onchange="getSubmit()">
            <option value="">-- Select Union --</option>';
            foreach($data as $v)
            {
                $output.='<option value="'.$v->id.'">'.$v->title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">No Union Found!</b>';
        }
    }

    public function find_all_district($division)
    {
        $data = Division::getDistrict($division);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="district" id="district" onchange="return findAllUpazila()">
            <option value="">-- Select District --</option>';
            foreach($data as $v)
            {
                $output.='<option value="'.$v->id.'">'.$v->title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">No District Found!</b>';
        }
    }

    public function find_all_upazila($district)
    {
        $data = District::getUpazila($district);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="upazila" id="upazila" onchange="return findAllUnion()">
            <option value="">-- Select Upazila --</option>';
            foreach($data as $v)
            {
                $output.='<option value="'.$v->id.'">'.$v->title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">No Upazila Found!</b>';
        }
    }



    public function find_all_union($upazila)
    {
        $data = Upazilla::getUnion($upazila);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="union" id="union" onchange="getWard()">
            <option value="">-- Select Union --</option>';
            foreach($data as $v)
            {
                $output.='<option value="'.$v->id.'">'.$v->title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">No Union Found!</b>';
        }
    }
}
