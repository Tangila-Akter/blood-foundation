<?php

namespace App\Repository;

use App\Models\Division;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class DivisionRepository
{
    
    public static function get()
    {
        $data = Division::latest();

        if(auth('admin')->check()){
            $data->accessible();
        }
        
       return $data->get();
    }

    public static function create($request)
    {
        $validator = Validator::make($request->all(),[
            "title" => "required|unique:divisions,title",
        ]);

        $input = $request->except('_token');

        

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{

            if(Division::create($input)){
                return response()->json(['success' => 'Division created successfully done!']);

            }else{
                return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
            }
        }
    }

    public static function update($request, $id)
    {
        $validator = Validator::make($request->all(),[
            "title" => "required",
        ]);

        $input = $request->except('_token');

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{

            if(Division::find($id)->update($input)){
                return response()->json(['success' => 'Division updated successfully done!']);

            }else{
                return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
            }
        }
    }


    public static function delete($id)
    {
        if(Division::find($id)->delete()){
            return response()->json(['success' => 'Division deleted successfully done!']);

        }else{
            return response()->json(['error' => 'Data Does not deleted.someting went to wrong. please try again!']);
        }
    }


    public static function bluk_update($request)
    {
        $input = $request->only(['status']);

        if($request->has('status') && $request->status == 1){
            $input['status'] = 1;
        }
   
        if($request->has('ids')){
            $ids = $request->ids;
            foreach($ids as $id){
                Division::find($id)->update($input);
            }

            return response()->json(['success' => 'Division bulk changed successfully done!']);

        }

        return response()->json(['error' => 'Someting went to wrong. please try again!']);
    }


    public static function bluk_delete($request)
    {
        $ids = $request->ids;
        foreach($ids as $id){
            if($id != null){
                Division::find($id)->delete();
            }else{
                return response()->json(['error' => 'Someting went to wrong. please try again!']);
            }
        }
        return response()->json(['success' => 'Division deleted successfully done!']);
    }
}