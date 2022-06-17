<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Restaurant,
    Plat
};

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



    public function ajouter_plat_panier(Request $request) {
        
        $plat = Plat::find($request->plat);
        $plat_exist = auth()->user()->panier_plats()->find($request->plat);
        if ($plat_exist) {
            $plat_exist->pivot->quantite++;
            $plat_exist->pivot->save();
            session()->flash('message', 'Plat ajouter succse au panier.');
        }else {
            auth()->user()->panier_plats()->attach($plat);
            session()->flash('message', 'Post successfully updated.');
        }

        return redirect()->back();
    }

    public function plat_panier_list(Request $request) {
        $plats = auth()->user()->panier_plats;

        return view('plat_panier_list')->with('plats', $plats);
    }

    
}
