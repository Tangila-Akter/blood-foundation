<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        
        if(request()->ajax()){
            $languages = Language::query()->latest();
            return DataTables::of($languages)
            ->addColumn('checkbox', function($language){
                $html = '<label class="d-block" for="selected_item_'.$language->id.'"><input type="checkbox" id="selected_item_'.$language->id.'" name="selected_item" class="form-checked checkbox" value="'.$language->id.'" /></label>';
                return $html;
            })
           

            ->addColumn('status', function($language){
                $html = '<span class="badge bg-danger">Inactive</span>';
                if($language->status){
                    $html = '<span class="badge bg-success">Active</span>';
                }

                
                return $html; 
            })
           
            ->editColumn('updated_at', function($language){
                return get_system_date_format($language->updated_at);
            })
            ->addColumn('action',function($language){
                $html = '<div class="btn-group">';
                $html .= '<button data-url="'.route('admin.languages.edit',$language->id).'" class="btn btn-primary btn-sm show-modal">Edit</button>';
                $html .= '<button data-url="'.route('admin.languages.delete',$language->id).'" class="btn btn-danger btn-sm show-modal">Delete</button>';
                $html .= '</div>';
                return $html;
            })
            ->rawColumns(['checkbox','title','code','status','updated_at','action'])
            ->toJson();
        }
        return view('admin.languages.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin.languages.create');
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
            "title" => "required|unique:languages,title",
            "code" => "required|unique:languages,code",
        ]);

        $input = $request->except('_token');
        
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{

            if(Language::create($input)){
                return response()->json(['success' => 'Language created successfully done!']);

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
        $language = Language::findOrFail($id);
        return view('admin.languages.show',compact('language'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.languages.edit',compact('language'));
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
            "title" => "required|unique:languages,title,$id",
            "code" => "required|unique:languages,code,$id",
        ]);

        $input = $request->except('_token');


        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{


            if(Language::find($id)->update($input)){
                return response()->json(['success' => 'Language updated successfully done!']);

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
        return view('admin.languages.delete',compact('id'));
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        if(Language::find($id)->delete()){
            return response()->json(['success' => 'Language deleted successfully done!']);

        }else{
            return response()->json(['error' => 'Data Does not deleted.someting went to wrong. please try again!']);
        }
    }


    // extra method 

    public function bulk_change(Request $request)
    {
        $ids = $request->ids;
        return view('admin.languages.bulk_change',compact('ids'));
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
                Language::find($id)->update($input);
            }

            return response()->json(['success' => 'Language bulk changed successfully done!']);

        }


        return response()->json(['error' => 'Someting went to wrong. please try again!']);
        
    }

    public function bulk_delete(Request $request)
    {
        $ids = $request->ids;
        return view('admin.languages.bulk_delete',compact('ids'));
    }

    public function bulk_destroy(Request $request)
    {
        $ids = $request->ids;
        foreach($ids as $id){
            if($id != null){
                Language::find($id)->delete();
            }else{
                return response()->json(['error' => 'Someting went to wrong. please try again!']);
            }
        }

        return response()->json(['success' => 'Language deleted successfully done!']);
    }
}
