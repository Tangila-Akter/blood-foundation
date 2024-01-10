<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('countries')->where('id', 1)->exists()){
            DB::table('countries')->insert([
                "title" => "Bangladesh",
                "iso3" => "BGD",
                "iso2" => "BD",
                "numeric_code" => "050",
                "phone_code" => "880",
                "capital" => "Dhaka",
                "currency" => "BDT",
                "currency_name" => "Bangladeshi taka",
                "currency_symbol" => "৳",
                "tld" => ".bd",
                "native" => "Bangladesh",
                "nationality" => "Bangladeshi",
                "region" => "Asia",
                "subregion" => "Southern Asia",
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
