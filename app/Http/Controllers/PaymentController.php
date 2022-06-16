<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request, Product $product){
        // $product->qauntity -= $request->qauntity; 
        return view('payment')->with('product', $product);
    }

    public function success(Request $request, Product $product){
        $product->quantity -= $request->quantity; 
        $product->save(); 
        return redirect()->route('products.show',['product'=> $product->id])->with('success','Payment proccess complete success , Thanks you');
    }

    public function failed(Request $request, Product $product){
        return redirect()->route('products.show',['product'=> $product->id])->with('error','Oobs, cant complete the process now try later');
    }
}
