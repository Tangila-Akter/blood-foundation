<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VillagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('villages')->delete();
        
        \DB::table('villages')->insert(array (
            0 => 
            array (
                'code' => '001',
                'created_at' => '2024-01-22 18:57:15',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 1,
                'title' => 'Haripur',
                'title_bn' => 'হরিপুর',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-22 18:57:15',
                'ward_id' => 1,
            ),
            1 => 
            array (
                'code' => '002',
                'created_at' => '2024-01-22 18:57:16',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 2,
                'title' => 'Bathania',
                'title_bn' => 'বাথানিয়া',
                'union_id' => 5,
                'upazilla_id' => 3,
                'updated_at' => '2024-01-22 18:57:16',
                'ward_id' => 1,
            ),
        ));
        
        
    }
}