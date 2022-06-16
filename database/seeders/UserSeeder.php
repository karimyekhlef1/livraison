<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! User::where( ['email' => 'admin@admin.com'])->count() > 0){
            $admin = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com', // as Admin
                'is_admin' => true,
                'is_valid' => true,
                'is_blocked' => false,
            ]);
            $admin->assignRole('admin');
        }

        if (! User::where( ['email' => 'user@user.com'])->count() > 0){
            $user = User::factory()->create([
                'name' => 'Islam',
                'email' => 'user@user.com', // as User
                'is_admin' => false,
                'is_valid' => false,
                'is_blocked' => false,
            ]);
            $user->assignRole('user');
        }

        for ($i=0; $i < 10; $i++) { 
            $user = User::factory()->create([
                'is_admin' => false,
                'is_valid' => false,
                'is_blocked' => false,
            ]);
            $user->assignRole('user');
        }
    }
}
