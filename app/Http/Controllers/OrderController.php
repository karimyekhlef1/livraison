<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [

            ]
        ]);
    }

    public function order(Request $request){
        $product = Product::findOrFail($request->product);
        $order = Order::create([
            "user_id" => Auth::id(), 
            "product_id" => $product->id
        ]);
        return view('order_product')->with(['order' => $order, 'product' => $product]);
    }
    public function createOrderSale(){
        
    }

    public function createOrderRent(){
        
    }

    public function orderExchange(Request $request){
        $product = Product::findOrFail($request->product);
        return redirect()->route('products.show',['product'=> $product->id])->with('success','Exchange proccess complete success , Thanks you');
    }
}
