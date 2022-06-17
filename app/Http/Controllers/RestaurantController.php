<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function get_restarants() {
        $restaurants = Restaurant::all();
        return view('tables.restaurants')->with('restaurants', $restaurants);
    }

    public function show($restaurant_id) {

        $restaurant = Restaurant::with('plats')->find($restaurant_id);
        return view('restaurant_details')->with('restaurant', $restaurant);
    }
}
