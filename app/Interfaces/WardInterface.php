<?php
namespace App\Interfaces;
use App\Interfaces\BaseInterface;

interface WardInterface extends BaseInterface{
    public function create_ward($union_id);
    public function find_district($division);
    public function by_union($union);
    public function find_upazila($district);
    public function find_all_district($division);
    public function save_ward($data);
    public function find_all_upazila($district);

    public function find_union($upazila);
    public function find_all_union($upazila);
    public function get_ward($union);
}
