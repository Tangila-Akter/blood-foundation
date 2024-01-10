<?php

namespace App\Repository;

use Exception;
use App\Models\Union;
use App\Models\Village;
use App\Models\District;
use App\Models\Upazilla;
use App\Models\Ward;
use App\Rules\UniqueTitle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class VillageRepository
{
    
    public static function get($request = null)
    {
        $villages = Village::orderBy('ward_id', 'ASC');

        if($request != null){
            if($request->has('division_id')){
                $villages->where('division_id', $request->division_id);
            }
            if($request->has('district_id')){
                $villages->where('district_id', $request->district_id);
            }
            if($request->has('upazilla_id')){
                $villages->where('upazilla_id', $request->upazilla_id);
            }
            if($request->has('union_id')){
                $villages->where('union_id', $request->union_id);
            }
        }

       return $villages->get()->groupBy('ward_id');
    }

    public static function create($request)
    {
        $validator = Validator::make($request->all(),[
            "union_id" => "required",
            "ward_no" => "required",
            "title.*" => ['required', new UniqueTitle('Village', 'union_id', $request->union_id)],
        ]);


        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }else{
            DB::beginTransaction();
            if(is_array($request->title)){

                try{
                    $union = Union::where('id', $request->union_id)->first();

                    $ward = Ward::where('title',$request->ward_no)->first();

                    if($ward == null){
                        $ward = new Ward();
                    }

                    $ward->title = $request->ward_no;
                    $ward->union_id = $request->union_id;
                    $ward->upazilla_id = $union->upazilla_id;
                    $ward->district_id = $union->district_id;
                    $ward->division_id = $union->division_id;
                    $ward->save();

                    if($union != null){
                        foreach($request->title as $title){
                            Village::create([
                                'title' => $title,
                                'ward_id' => $ward->id,
                                'union_id' => $request->union_id,
                                'upazilla_id' => $union->upazilla_id,
                                'district_id' => $union->district_id,
                                'division_id' => $union->division_id,
                            ]);
                        }
                    }
                    

                    DB::commit();
                    return response()->json(['success' => 'Village created successfully done!']);
                }catch(Exception $exception){
                    Log::error($exception->getMessage());
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

            if(Village::find($id)->update($input)){
                return response()->json(['success' => 'Village updated successfully done!']);

            }else{
                return response()->json(['error' => 'Data Does not insert.someting went to wrong. please try again!']);
            }
        }
    }


    public static function delete($id)
    {
        if(Village::find($id)->delete()){
            return response()->json(['success' => 'Village deleted successfully done!']);

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
                Village::find($id)->update($input);
            }

            return response()->json(['success' => 'Village bulk changed successfully done!']);

        }

        return response()->json(['error' => 'Someting went to wrong. please try again!']);
    }


    public static function bluk_delete($request)
    {
        $ids = $request->ids;
        foreach($ids as $id){
            if($id != null){
                Village::find($id)->delete();
            }else{
                return response()->json(['error' => 'Someting went to wrong. please try again!']);
            }
        }
        return response()->json(['success' => 'Village deleted successfully done!']);
    }
}