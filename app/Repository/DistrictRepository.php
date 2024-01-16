<?php

namespace App\Repository;

use Exception;
use App\Models\District;
use App\Rules\UniqueTitle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Http\Request\DistrictRequest;
use App\Models\Division;

class DistrictRepository
{

    public static function get($request = null)
    {
        $districts = Division::with('districts')->orderBy('id', 'ASC');

        if($request != null){
            $districts->where('id', $request->division_id);
        }

        if(auth('admin')->check()){
            $districts->accessible();
        }

       return $districts->get();
    }

    public static function create($request)
    {
        $input = $request->except('_token');
        DB::beginTransaction();
        if(is_array($request->title)){

            try{
                for($i=0; $i < count($request->title); $i++)
                {
                    District::create([
                        'title' => $request->title[$i],
                        'title_bn' => $request->title_bn[$i],
                        'division_id' => $request->division_id
                    ]);
                }

                DB::commit();
                return response()->json(['success' => __('district.create_message')]);
            }catch(Exception $exception){
                Log::info($exception->getMessage());
                DB::rollBack();
                return response()->json(['error' => __('district.error_message')]);
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

            if(District::find($id)->update($input)){
                return response()->json(['success' => __('district.update_message')]);

            }else{
                return response()->json(['error' => __('district.update_error')]);
            }
        }
    }


    public static function delete($id)
    {
        if(District::find($id)->delete()){
            return response()->json(['success' => __('district.delete_message')]);

        }else{
            return response()->json(['error' => __('district.delete_error')]);
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
                District::find($id)->update($input);
            }

            return response()->json(['success' => 'District bulk changed successfully done!']);

        }

        return response()->json(['error' => 'Someting went to wrong. please try again!']);
    }


    public static function bluk_delete($request)
    {
        $ids = $request->ids;
        foreach($ids as $id){
            if($id != null){
                District::find($id)->delete();
            }else{
                return response()->json(['error' => 'Someting went to wrong. please try again!']);
            }
        }
        return response()->json(['success' => 'District deleted successfully done!']);
    }
}
