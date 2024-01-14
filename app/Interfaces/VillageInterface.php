<?php
namespace App\Interfaces;
use App\Interfaces\BaseInterface;

interface VillageInterface extends BaseInterface{
    public function get_villages($ward);
    public function all_village($ward);
    public function load_villages($ward);
}
