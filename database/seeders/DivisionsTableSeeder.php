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
                'code' => 'CHI',
                'country_id' => 1,
                'created_at' => '2024-01-10 16:43:15',
                'created_by' => 1,
                'id' => 1,
                'title' => 'Chittagong',
                'title_bn' => 'চট্টগ্রাম',
                'updated_at' => '2024-01-10 16:43:32',
            ),
            1 => 
            array (
                'code' => '5546',
                'country_id' => 1,
                'created_at' => '2024-01-13 10:29:09',
                'created_by' => 1,
                'id' => 2,
                'title' => 'Rajshahi',
                'title_bn' => 'রাজশাহী',
                'updated_at' => '2024-01-16 05:34:46',
            ),
            2 => 
            array (
                'code' => '096',
                'country_id' => 1,
                'created_at' => '2024-01-15 19:22:50',
                'created_by' => 1,
                'id' => 7,
                'title' => 'Mymensingh',
                'title_bn' => 'ময়মনসিংহ',
                'updated_at' => '2024-01-15 19:22:50',
            ),
        ));
        
        
    }
}