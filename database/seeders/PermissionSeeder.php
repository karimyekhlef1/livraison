<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Products Permissions
         Permission::firstOrCreate(['name' => 'products.view']);
         Permission::firstOrCreate(['name' => 'products.edit']);
         Permission::firstOrCreate(['name' => 'products.delete']);
         Permission::firstOrCreate(['name' => 'products.upload']);
         Permission::firstOrCreate(['name' => 'products.export']);
         Permission::firstOrCreate(['name' => 'products.import']);
         Permission::firstOrCreate(['name' => 'products.*']);
 
         // Users Permissions
         Permission::firstOrCreate(['name' => 'users.view']);
         Permission::firstOrCreate(['name' => 'users.edit']);
         Permission::firstOrCreate(['name' => 'users.delete']);
         Permission::firstOrCreate(['name' => 'users.export']);
         Permission::firstOrCreate(['name' => 'users.import']);
         Permission::firstOrCreate(['name' => 'users.*']);
    }
}
