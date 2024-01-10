<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Union;
use App\Models\District;
use App\Models\Upazilla;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        
        if(request()->ajax()){
            $operators = Admin::query()->latest();
            return DataTables::of($operators)
            ->addColumn('checkbox', function($operator){
                $html = '<label class="d-block" for="selected_item_'.$operator->id.'"><input type="checkbox" id="selected_item_'.$operator->id.'" name="selected_item" class="form-checked checkbox" value="'.$operator->id.'" /></label>';
                return $html;
            })
           

            ->addColumn('status', function($operator){
                $html = '<span class="badge bg-danger">Inactive</span>';
                if($operator->status){
                    $html = '<span class="badge bg-success">Active</span>';
                }
                return $html; 
            })
           
            ->editColumn('updated_at', function($operator){
                return get_system_date_format($operator->updated_at);
            })
            ->addColumn('action',function($operator){
                $html = '<div class="btn-group">';
                $html .= '<button data-url="'.route('admin.operators.assign_location',$operator->id).'" class="btn btn-info btn-sm show-modal">Access Location</button>';
                $html .= '<button data-url="'.route('admin.operators.edit',$operator->id).'" class="btn btn-primary btn-sm show-modal">Edit</button>';
                $html .= '<button data-url="'.route('admin.operators.delete',$operator->id).'" class="btn btn-danger btn-sm show-modal">Delete</button>';
                $html .= '</div>';
                return $html;
            })
            ->rawColumns(['checkbox','name','email','status','updated_at','action'])
            ->toJson();
        }
        return view('admin.operators.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin.operators.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            "email" => "required|unique:admins,email",
            "name" => "required",
            "password" => "required | max:64",
        ]);

        $input = $request->except('_token','password');
        
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{
            
            $input['password'] = Hash::make($request->input('password'));

            if(Admin::create($input)){
                return response()->json(['success' => 'Admin created successfully done!']);

            }else{
                return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
            }
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $operator = Admin::findOrFail($id);
        return view('admin.operators.show',compact('operator'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $operator = Admin::findOrFail($id);
        return view('admin.operators.edit',compact('operator'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(),[
            "email" => "required|unique:admins,email,$id",
            "name" => "required",
        ]);

        $input = $request->except('_token','password');


        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{

            if ($request->has('password') && !empty($request->password)) {
                $input['password'] = Hash::make($request->password);
            }

            if(Admin::find($id)->update($input)){
                return response()->json(['success' => 'Admin updated successfully done!']);

            }else{
                return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delete($id)
    {
        return view('admin.operators.delete',compact('id'));
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        if(Admin::find($id)->delete()){
            return response()->json(['success' => 'Admin deleted successfully done!']);

        }else{
            return response()->json(['error' => 'Data Does not deleted.someting went to wrong. please try again!']);
        }
    }


    // extra method 

    public function bulk_change(Request $request)
    {
        $ids = $request->ids;
        return view('admin.operators.bulk_change',compact('ids'));
    }

    public function bulk_update(Request $request)
    {
        
        $input = $request->only(['status']);

        if($request->has('status') && $request->status == 1){
            $input['status'] = 1;
        }

    
        if($request->has('ids')){
            $ids = $request->ids;
            foreach($ids as $id){
                Admin::find($id)->update($input);
            }

            return response()->json(['success' => 'Admin bulk changed successfully done!']);

        }


        return response()->json(['error' => 'Someting went to wrong. please try again!']);
        
    }

    public function bulk_delete(Request $request)
    {
        $ids = $request->ids;
        return view('admin.operators.bulk_delete',compact('ids'));
    }

    public function bulk_destroy(Request $request)
    {
        $ids = $request->ids;
        foreach($ids as $id){
            if($id != null){
                Admin::find($id)->delete();
            }else{
                return response()->json(['error' => 'Someting went to wrong. please try again!']);
            }
        }

        return response()->json(['success' => 'Admin deleted successfully done!']);
    }

    public function assign_location($id)
    {
        $operator = Admin::findOrFail($id);
        $districts = District::where('division_id', $operator->division_id)->get();
        $upazillas = Upazilla::where('district_id', $operator->district_id)->get();
        $unions = Union::where('upazilla_id', $operator->upazilla_id)->get();
        return view('admin.operators.assign-location', compact('operator', 'districts', 'upazillas', 'unions'));
    }

    public function assign(Request $request, $id)
    {
        
        $input = $request->except('_token');

        $input = $request->all();

        if (Admin::find($id)->update($input)) {
            return response()->json(['success' => 'Operator Assign location successfully done!']);
        } else {
            return response()->json(['error' => 'Data Does not updated.someting went to wrong. please try again!']);
        }
        
    }
}
