<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 2,
                'title' => 'Feni',
                'title_bn' => 'ফেনী',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            1 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 3,
                'title' => 'Brahmanbaria',
                'title_bn' => 'ব্রাক্ষনবাড়ীয়া',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            2 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 4,
                'title' => 'Rangamati',
                'title_bn' => 'রাঙামাটি',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            3 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 5,
                'title' => 'Noakhali',
                'title_bn' => 'নোয়াখালী',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            4 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 6,
                'title' => 'Chandpur',
                'title_bn' => 'চাঁদপুর',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            5 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 7,
                'title' => 'Lakshmipur',
                'title_bn' => 'লক্ষীপুর',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            6 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 8,
                'title' => 'Chattogram',
                'title_bn' => 'চট্টগ্রাম',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            7 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 9,
                'title' => 'Coxsbazar',
                'title_bn' => 'কক্সবাজার',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            8 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 10,
                'title' => 'Khagrachhari',
                'title_bn' => 'খাগড়াছড়ি',
                'updated_at' => '2024-01-16 07:28:59',
            ),
            9 => 
            array (
                'code' => NULL,
                'created_at' => '2024-01-16 07:28:59',
                'created_by' => 1,
                'division_id' => 1,
                'id' => 11,
                'title' => 'Bandarban',
                'title_bn' => 'বান্দারবান',
                'updated_at' => '2024-01-16 07:28:59',
            ),
        ));
        
        
    }
}