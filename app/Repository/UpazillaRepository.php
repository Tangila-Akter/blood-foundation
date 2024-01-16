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
        $upazillas = District::orderBy('id', 'ASC')->with('upazilas');

        // if($request != null){
        //     if($request->has('division_id')){
        //         $upazillas->where('division_id', $request->division_id);
        //     }
        //     if($request->has('district_id')){
        //         $upazillas->where('district_id', $request->district_id);
        //     }
        // }

        // if(auth('admin')->check()){
        //     $upazillas->accessible();
        // }

       return $upazillas->get();
    }

    public static function create($request)
    {
            // return $request->district_id;
            try{
                $division_id = District::where('id', $request->district_id)->first()->division_id;
                for ($i=0; $i < count($request->title) ; $i++)
                {
                    Upazilla::create([
                        'title' => $request->title[$i],
                        'title_bn' => $request->title_bn[$i],
                        'district_id' => $request->district_id,
                        'division_id' => $division_id,
                    ]);
                }
                return response()->json(['success' => __('upazila.create_message')]);
            }catch(Exception $exception){
                // DB::rollBack();
                return response()->json(['error' => __('upazila.error_message')]);
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
                return response()->json(['success' => __('upazila.edit_message')]);

            }else{
                return response()->json(['error' => __('upazila.edit_error')]);
            }
        }
    }


    public static function delete($id)
    {
        if(Upazilla::find($id)->delete()){
            return response()->json(['success' => __('upazila.delete_message')]);

        }else{
            return response()->json(['error' => __('upazila.delete_error')]);
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
                return response()->json(['error' => __('upazila.delete_message')]);
            }
        }
        return response()->json(['success' => 'Upazilla deleted successfully done!']);
    }
}
