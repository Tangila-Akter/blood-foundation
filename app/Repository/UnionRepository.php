<?php

namespace App\Repository;

use Exception;
use App\Models\Union;
use App\Models\District;
use App\Models\Upazilla;
use App\Rules\UniqueTitle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class UnionRepository
{
    
    public static function get($request = null)
    {
        $unions = Union::orderBy('division_id', 'ASC');

        if($request != null){
            if($request->has('division_id')){
                $unions->where('division_id', $request->division_id);
            }
            if($request->has('district_id')){
                $unions->where('district_id', $request->district_id);
            }
            if($request->has('upazilla_id')){
                $unions->where('upazilla_id', $request->upazilla_id);
            }
        }

        if(auth('admin')->check()){
            $unions->accessible();
        }

       return $unions->get();
    }

    public static function create($request)
    {
        $validator = Validator::make($request->all(),[
            "upazilla_id" => "required",
            "title.*" => ['required', new UniqueTitle('Union', 'upazilla_id', $request->upazilla_id)],
        ]);

        $input = $request->except('_token');

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{
            DB::beginTransaction();
            if(is_array($request->title)){

                try{
                    $upazilla = Upazilla::where('id', $request->upazilla_id)->first();
                    if($upazilla != null){
                        foreach($request->title as $title){
                            Union::create([
                                'title' => $title,
                                'upazilla_id' => $request->upazilla_id,
                                'district_id' => $upazilla->district_id,
                                'division_id' => $upazilla->division_id,
                            ]);
                        }
                    }
                    

                    DB::commit();
                    return response()->json(['success' => 'Union created successfully done!']);
                }catch(Exception $exception){
                    DB::rollBack();
                    return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
                }
                
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

            if(Union::find($id)->update($input)){
                return response()->json(['success' => 'Union updated successfully done!']);

            }else{
                return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
            }
        }
    }


    public static function delete($id)
    {
        if(Union::find($id)->delete()){
            return response()->json(['success' => 'Union deleted successfully done!']);

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
                Union::find($id)->update($input);
            }

            return response()->json(['success' => 'Union bulk changed successfully done!']);

        }

        return response()->json(['error' => 'Someting went to wrong. please try again!']);
    }


    public static function bluk_delete($request)
    {
        $ids = $request->ids;
        foreach($ids as $id){
            if($id != null){
                Union::find($id)->delete();
            }else{
                return response()->json(['error' => 'Someting went to wrong. please try again!']);
            }
        }
        return response()->json(['success' => 'Union deleted successfully done!']);
    }
}