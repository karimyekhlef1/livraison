<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plat;

class PlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plat::create([
            'nom_du_plat' => 'pizza',
            'description' =>'pizza description',
            'photo' =>'pizza.jpg',
            'prix' => '600',
            'restaurant_id'=> 1
        ]);
        Plat::create([
            'nom_du_plat' => 'fish',
            'description' =>'fish description',
            'photo' =>'fish.jpg',
            'prix' => '1200',
            'restaurant_id'=> 1
        ]);
    }
}
