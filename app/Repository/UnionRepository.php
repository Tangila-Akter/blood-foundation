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
        $unions = Upazilla::orderBy('id', 'ASC')->with('unions');
        if(isset($request->upazilla_id))
        {
            $unions->where('id',$request->upazilla_id);
        }


       return $unions->get();
    }

    public static function create($request)
    {
        if(is_array($request->title)){
            try{
                $upazilla = Upazilla::where('id', $request->upazilla_id)->first();
                if($upazilla != null){
                    for ($i=0; $i < count($request->title) ; $i++) {
                        Union::create([
                            'title' => $request->title[$i],
                            'title_bn' => $request->title_bn[$i],
                            'upazilla_id' => $request->upazilla_id,
                            'district_id' => $upazilla->district_id,
                            'division_id' => $upazilla->division_id,
                        ]);
                    }
                }
                return response()->json(['success' => __('union.create_message')]);
            }catch(Exception $exception){
                DB::rollBack();
                return response()->json(['error' => __('union.create_error')]);
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
                return response()->json(['success' => __('union.update_message')]);

            }else{
                return response()->json(['error' => __('union.update_error')]);
            }
        }
    }


    public static function delete($id)
    {
        if(Union::find($id)->delete()){
            return response()->json(['success' => __('union.delete_message')]);

        }else{
            return response()->json(['error' => __('union.delete_error')]);
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
