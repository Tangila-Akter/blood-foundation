<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoundationProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('foundation_profiles')->where('id',1)->exists()){
            DB::table('foundation_profiles')->insert([
                'foundation_id'=>'1',
                'permitPaper' => '090.pdf',
                'logo' => '00.jpg',
                'phone' => '09980080',
                'officeAddress' => 'dhaka'
            ]);
        }
    }
}
