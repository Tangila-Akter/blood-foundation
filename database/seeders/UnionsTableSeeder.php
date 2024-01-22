<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('unions')->delete();
        
        \DB::table('unions')->insert(array (
            0 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-17 10:45:58',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 5,
                'title' => 'Pathan Nagar',
                'title_bn' => 'পাঠাননগর',
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 10:46:34',
            ),
            1 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-17 10:45:58',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 6,
                'title' => 'Radhanagar',
                'title_bn' => 'রাধানগর',
                'upazilla_id' => 3,
                'updated_at' => '2024-01-17 10:46:47',
            ),
            2 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-17 10:51:18',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 7,
                'title' => 'ধলিয়া',
                'title_bn' => NULL,
                'upazilla_id' => 4,
                'updated_at' => '2024-01-17 10:51:18',
            ),
        ));
        
        
    }
}