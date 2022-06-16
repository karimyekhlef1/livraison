<?php

namespace App\Http\Controllers;

use App\Models\restaurant;


use Illuminate\Http\Request;

class RestController extends Controller
{
    // neeeeeeeeeeeeeeeeeeeeeeeeeeeeew
    public function get_restarants()
    {
        return restaurant::all();
    }
}
