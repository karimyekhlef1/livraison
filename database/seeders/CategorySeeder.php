<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
                ['name' => 'Telephones'],
                ['name' => 'Vehicule'],
                ['name' => 'Electronique'],
                ['name' => 'Informatique'],
                ['name' => 'Market'],
                ['name' => 'Cosmetique'],
                ['name' => 'Services'],
                ['name' => 'Other'],
            ]
        );
    }
}
