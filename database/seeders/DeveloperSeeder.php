<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('developers')->where('id')->exists()){
            DB::table('developers')->insert([
                'image'=>'ceo.jpeg',
                'name' => 'Tajul',
                'SocialMediaLink' => 'tajul',
                'position'=>'Backend Developer',
                'description'=>'Bondhu Foundation works as a safe and quick bridge between blood donors and receivers at need through internet. We are working to ensure the health care of the poor people of the society who cannot afford their own. Bondhu foundation is always there to help those people and to conduct various social activities.',
                'created_at' => now(),
                'updated_at' => now()
            ]);
            DB::table('developers')->insert([
                'image'=>'download2.jpeg',
                'name' => 'Tajul2',
                'SocialMediaLink' => 'tajul2',
                'position'=>'Backend Developer2',
                'description'=>'Bondhu Foundation works as a safe and quick bridge between blood donors and receivers at need through internet. We are working to ensure the health care of the poor people of the society who cannot afford their own. Bondhu foundation is always there to help those people and to conduct various social activities.',
                'created_at' => now(),
                'updated_at' => now()
            ]);
            DB::table('developers')->insert([
                'image'=>'download3.jpeg',
                'name' => 'Tajul3',
                'SocialMediaLink' => 'tajul3',
                'position'=>'Backend Developer3',
                'description'=>'Bondhu Foundation works as a safe and quick bridge between blood donors and receivers at need through internet. We are working to ensure the health care of the poor people of the society who cannot afford their own. Bondhu foundation is always there to help those people and to conduct various social activities.',
                'created_at' => now(),
                'updated_at' => now()
            ]);
            DB::table('developers')->insert([
                'image'=>'download4.jpeg',
                'name' => 'Tajul4',
                'SocialMediaLink' => 'tajul4',
                'position'=>'Backend Developer4',
                'description'=>'Bondhu Foundation works as a safe and quick bridge between blood donors and receivers at need through internet. We are working to ensure the health care of the poor people of the society who cannot afford their own. Bondhu foundation is always there to help those people and to conduct various social activities.',
                'created_at' => now(),
                'updated_at' => now()
            ]);
            DB::table('developers')->insert([
                'image'=>'download5.jpeg',
                'name' => 'Tajul5',
                'SocialMediaLink' => 'tajul5',
                'position'=>'Backend Developer5',
                'description'=>'Bondhu Foundation works as a safe and quick bridge between blood donors and receivers at need through internet. We are working to ensure the health care of the poor people of the society who cannot afford their own. Bondhu foundation is always there to help those people and to conduct various social activities.',
                'created_at' => now(),
                'updated_at' => now()
            ]);

        }
    }
}
