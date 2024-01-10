<?php

namespace App\Repository;

use Exception;
use App\Models\District;
use App\Models\Upazilla;
use App\Rules\UniqueTitle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class UpazillaRepository
{
    
    public static function get($request = null)
    {
        $upazillas = Upazilla::orderBy('division_id', 'ASC');

        if($request != null){
            if($request->has('division_id')){
                $upazillas->where('division_id', $request->division_id);
            }
            if($request->has('district_id')){
                $upazillas->where('district_id', $request->district_id);
            }
        }

        if(auth('admin')->check()){
            $upazillas->accessible();
        }

       return $upazillas->get();
    }

    public static function create($request)
    {
        $validator = Validator::make($request->all(),[
            "district_id" => "required",
            "title.*" => ['required', new UniqueTitle('Upazilla', 'district_id', $request->district_id)],
        ]);

        $input = $request->except('_token');

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{
            DB::beginTransaction();
            if(is_array($request->title)){

                try{
                    $division_id = District::where('id', $request->district_id)->first()->division_id;
                    foreach($request->title as $title){
                        Upazilla::create([
                            'title' => $title,
                            'district_id' => $request->district_id,
                            'division_id' => $division_id
                        ]);
                    }

                    DB::commit();
                    return response()->json(['success' => 'Upazilla created successfully done!']);
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

            if(Upazilla::find($id)->update($input)){
                return response()->json(['success' => 'Upazilla updated successfully done!']);

            }else{
                return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
            }
        }
    }


    public static function delete($id)
    {
        if(Upazilla::find($id)->delete()){
            return response()->json(['success' => 'Upazilla deleted successfully done!']);

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
                Upazilla::find($id)->update($input);
            }

            return response()->json(['success' => 'Upazilla bulk changed successfully done!']);

        }

        return response()->json(['error' => 'Someting went to wrong. please try again!']);
    }


    public static function bluk_delete($request)
    {
        $ids = $request->ids;
        foreach($ids as $id){
            if($id != null){
                Upazilla::find($id)->delete();
            }else{
                return response()->json(['error' => 'Someting went to wrong. please try again!']);
            }
        }
        return response()->json(['success' => 'Upazilla deleted successfully done!']);
    }
}