<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        $this->call(SuperAdminRoleSeeder::class);
        $this->call(FoundationSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(DeveloperSeeder::class);
        //$this->call(FoundationProfileSeeder::class);
        $this->call(DivisionsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(UpazillasTableSeeder::class);
        $this->call(UnionsTableSeeder::class);
        $this->call(WardsTableSeeder::class);
        $this->call(VillagesTableSeeder::class);
    }
}
