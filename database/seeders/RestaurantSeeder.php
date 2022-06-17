<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'nom_de_restaurant' => 'Pizza Mega - La casa',
            'nom' => 'Islam',
            'prenom' => 'Rahim',
            'adresse' => 'Mila',
            'tel' => '+213456557878',
            'photo' => 'restau-1.jpg',
            'registre_commerce' => 'RG',
            'type_restaurant' => 'Pizza',
            'users_id' => 1,
            'email' => 'resto@resto.com', // as User
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        Restaurant::create([
            'nom_de_restaurant' => 'Fish Restau - Marina',
            'nom' => 'moradd',
            'prenom' => 'Rahim',
            'adresse' => 'Jijel',
            'tel' => '+213456557878',
            'photo' => 'restau-2.jpg',
            'registre_commerce' => 'RG',
            'type_restaurant' => 'pish',
            'users_id' => 1,
            'email' => 'resto2@resto2.com', // as User
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
    }
}
