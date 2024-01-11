<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\WardInterface;
use Illuminate\Support\Facades\File;
use App\Traits\ViewDirective;
use App\Models\Division;
use App\Http\Requests\WardRequest;

class WardController extends Controller
{
    use ViewDirective;
    protected $interface;
    protected $path;
    public function __construct(WardInterface $interface)
    {
        $this->path = 'admin.ward';
        $this->interface = $interface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->interface->index();
    }

    /**
     * getting data
     */

     public function get_ward(Request $request)
     {
        return $this->interface->get_ward($request->union);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = [];
        $param['division'] = Division::all();
        // return $param;
        return $this->view($this->path,'create',$param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WardRequest $request)
    {
        return $this->interface->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     *
     * Finding district by its division
     */

     public function find_district(Request $request)
     {
        return $this->interface->find_district($request->division);
     }

     /**
      * Finding upazila by its district
      */

      public function find_upazila(Request $request)
      {
        return $this->interface->find_upazila($request->district);
      }

      /**
       * Finding union by its upazilla
       */
      public function find_union(Request $request)
      {
        return $this->interface->find_union($request->upazila);
      }


      public function find_all_district(Request $request)
     {
        return $this->interface->find_all_district($request->division);
     }

     /**
      * Finding upazila by its district
      */

      public function find_all_upazila(Request $request)
      {
        return $this->interface->find_all_upazila($request->district);
      }

      public function find_all_union(Request $request)
      {
        return $this->interface->find_all_union($request->upazila);
      }
}
