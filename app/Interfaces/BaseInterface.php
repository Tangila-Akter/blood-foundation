<?php
namespace App\Interfaces;

interface BaseInterface{

    public function index();

    public function create();

    public function store($request);

    public function edit();

    public function destroy();

    public function restore();

    public function delete();

    public function print();

}
