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

            return response()->json(['success' => __('ward.create_message')]);
        }
        else
        {
            return response()->json(['error' => __('ward.create_error')]);
        }
    }

    public function edit($id)
    {
        $data['data'] = Ward::find($id);
        return $this->view($this->path,'edit',$data);
    }

    public function update($request,$id)
    {
        $data = array(
            'title'             => $request->title,
            'title_bn'             => $request->title_bn,
        );
        $update = Ward::find($id)->update($data);

        if($update)
        {
            return response()->json(['success' => __('ward.update_message')]);
        }
        else
        {
            return response()->json(['error' => __('ward.update_error')]);
        }
    }

    public function destroy($id)
    {
        Ward::find($id)->delete();
        return response()->json(['success' => __('ward.delete_message')]);
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
            <option value="">-- '.__('common.select_district').' --</option>';
            foreach($data as $v)
            {
                if(config('app.locale') == 'en')
                {
                    $title = $v->title ?: $v->title_bn;
                }
                else{
                    $title = $v->title_bn ?: $v->title;
                }
                $output.='<option value="'.$v->id.'">'.$title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">'.__('common.no_district').'</b>';
        }
    }

    public function find_upazila($district)
    {
        $data = District::getUpazila($district);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="upazila" id="upazila" onchange="return findUnion()">
            <option value="">-- '.__('common.select_upazila').' --</option>';
            foreach($data as $v)
            {
                if(config('app.locale') == 'en')
                {
                    $title = $v->title ?: $v->title_bn;
                }
                else{
                    $title = $v->title_bn ?: $v->title;
                }
                $output.='<option value="'.$v->id.'">'.$title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">'.__('common.no_upazila').'</b>';
        }
    }

    public function find_union($upazila)
    {
        $data = Upazilla::getUnion($upazila);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="union" id="union" onchange="getSubmit()">
            <option value="">-- '.__('common.select_union').' --</option>';
            foreach($data as $v)
            {
                $check = Ward::where('union_id',$v->id)->count();
                if($check == 0)
                {
                    if(config('app.locale') == 'en')
                    {
                        $title = $v->title ?: $v->title_bn;
                    }
                    else{
                        $title = $v->title_bn ?: $v->title;
                    }
                    $output.='<option value="'.$v->id.'">'.$title.'</option>';
                }
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">'.__('common.no_union').'</b>';
        }
    }

    public function find_all_district($division)
    {
        $data = Division::getDistrict($division);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="district" id="district_id" onchange="return findAllUpazila()">
            <option value="">-- '.__('common.select_district').' --</option>';
            foreach($data as $v)
            {
                if(config('app.locale') == 'en')
                {
                    $title = $v->title ?: $v->title_bn;
                }
                else{
                    $title = $v->title_bn ?: $v->title;
                }
                $output.='<option value="'.$v->id.'">'.$title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">'.__('common.no_district').'</b>';
        }
    }

    public function find_all_upazila($district)
    {
        $data = District::getUpazila($district);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="upazila" id="upazila_id" onchange="return findAllUnion()">
            <option value="">-- '.__('common.select_upazila').' --</option>';
            foreach($data as $v)
            {
                if(config('app.locale') == 'en')
                {
                    $title = $v->title ?: $v->title_bn;
                }
                else{
                    $title = $v->title_bn ?: $v->title;
                }
                $output.='<option value="'.$v->id.'">'.$title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">'.__('common.no_upazila').'</b>';
        }
    }



    public function find_all_union($upazila)
    {
        $data = Upazilla::getUnion($upazila);
        if(count($data) > 0)
        {
            $output = '<select class="form-select form-select-sm js-select" name="union" id="union_id" onchange="getWard()">
            <option value="">-- '.__('common.select_union').' --</option>';
            foreach($data as $v)
            {
                if(config('app.locale') == 'en')
                {
                    $title = $v->title ?: $v->title_bn;
                }
                else{
                    $title = $v->title_bn ?: $v->title;
                }
                $output.='<option value="'.$v->id.'">'.$title.'</option>';
            }
            $output.='</select>';
            return $output;
        }
        else
        {
            return '<b class="text-danger">'.__('common.no_union').'</b>';
        }
    }

    public function by_union($union)
    {
        $data =[];
        $data['union'] = Union::find($union);
        return view($this->path.'.ward_by_union',compact('data'));
    }

    public function create_ward($union_id)
    {
        $data['union_id'] = $union_id;
        return $this->view($this->path,'create_new_ward',$data);
    }

    public function save_ward($data)
    {
        $union = Union::find($data->union_id);
        $data = array(
            'division_id'       => $union->division_id,
            'district_id'       => $union->district_id,
            'upazilla_id'       => $union->upazilla_id,
            'union_id'          => $data->union_id,
            'title'             => $data->title,
            'title_bn'             => $data->title_bn,
        );
        $create = Ward::create($data);
        if($create)
        {
        return response()->json(['success' => 'Ward Created Successfully']);
        }
        else
        {
            return response()->json(['error' => 'Ward Not Created!']);
        }
    }
}
