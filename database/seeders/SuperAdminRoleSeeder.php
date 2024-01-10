<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class SuperAdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::first();
        if (Role::where(['name' => 'Super Admin', 'guard_name' => 'admin'])->doesntExist()) {
            $role = Role::create(['name' => 'Super Admin', 'guard_name' => 'admin']);
            $admin->assignRole([$role->id]);
        }
    }
}
