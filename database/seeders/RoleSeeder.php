<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::firstOrCreate(['name' => 'admin']);
        $admin_role->givePermissionTo(Permission::all());

        $user_role = Role::firstOrCreate(['name' => 'user']);
        $user_role->givePermissionTo('products.view');
    }
}
