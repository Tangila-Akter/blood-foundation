<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wards')->delete();
        
        \DB::table('wards')->insert(array (
            0 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 1,
                'title' => '1',
                'title_bn' => '১',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            1 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 2,
                'title' => '2',
                'title_bn' => '২',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            2 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 3,
                'title' => '3',
                'title_bn' => '৩',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            3 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 4,
                'title' => '4',
                'title_bn' => '৪',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            4 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 5,
                'title' => '5',
                'title_bn' => '৫',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            5 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 6,
                'title' => '6',
                'title_bn' => '৬',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            6 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 7,
                'title' => '7',
                'title_bn' => '৭',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            7 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 8,
                'title' => '8',
                'title_bn' => '৮',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            8 => 
            array (
                'created_at' => '2024-01-17 11:20:39',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 9,
                'title' => '9',
                'title_bn' => '৯',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:20:39',
            ),
            9 => 
            array (
                'created_at' => '2024-01-17 11:30:24',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 10,
                'title' => '10',
                'title_bn' => '১০',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 11:30:24',
            ),
        ));
        
        
    }
}