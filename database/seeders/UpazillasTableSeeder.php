<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UpazillasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('upazillas')->delete();
        
        \DB::table('upazillas')->insert(array (
            0 => 
            array (
                'code' => '875',
                'created_at' => '2024-01-16 19:12:43',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 3,
                'title' => 'Chagalnaiya',
                'title_bn' => 'ছাগলনাইয়া',
                'updated_at' => '2024-01-16 19:25:06',
            ),
            1 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 19:12:43',
                'created_by' => 1,
                'district_id' => 2,
                'division_id' => 1,
                'id' => 4,
                'title' => 'sadar',
                'title_bn' => 'সদর',
                'updated_at' => '2024-01-16 19:12:43',
            ),
        ));
        
        
    }
}