<?php
namespace App\Interfaces;

interface BaseInterface{

    public function index();

    public function create();

    public function store($request);

    public function edit($id);

    public function update($data,$id);

    public function destroy($id);

    public function restore();

    public function delete();

    public function print();

}
