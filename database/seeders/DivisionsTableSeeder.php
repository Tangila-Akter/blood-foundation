<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('divisions')->delete();
        
        \DB::table('divisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 1,
                'title' => 'Chittagong',
                'code' => 'CHI',
                'created_by' => 1,
                'created_at' => '2024-01-10 16:43:15',
                'updated_at' => '2024-01-10 16:43:32',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 1,
                'title' => 'Rajshahi',
                'code' => NULL,
                'created_by' => 1,
                'created_at' => '2024-01-13 10:29:09',
                'updated_at' => '2024-01-13 10:29:09',
            ),
        ));
        
        
    }
}