<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [
                'index',
                'show',
                'search',
            ]
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = [];
        if ($request->valid) {
            if ($request->valid === "no") {
                $products = Product::where('is_valid', '=', 0)
                    ->orderBy('created_at', 'desc')->get();
            } else
                if ($request->valid === "yes") {
                $products = Product::where('is_valid', '=', 1)
                    ->orderBy('created_at', 'desc')->get();
            }
        } else {
            $products = Product::orderBy('created_at', 'desc')->get();
        }

        if ($request->category) {

            $category = Category::find($request->category);
            if ($category) {
                // dd($category);
                $products = Product::where('category_id', '=', $category->id)
                    ->orderBy('created_at', 'desc')->get();
            }
        }

        // dd($products);

        return view('tables.products')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->file('photo')->getClientOriginalName());
        $photo_name = Auth::id() . '_' . $request->file('photo')->getClientOriginalName();

        $file = $request->file('photo')->storeAs('public/images', $photo_name); // save file locally
        // dd($file);
        $product = new Product();
        $product->title = $request->title;
        $product->photo = $photo_name;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->state = $request->state;
        $product->type_transaction = $request->type_transaction;
        $product->quantity = $request->quantity;
        $product->address = $request->address;
        $product->marque = $request->marque;
        $product->method_payer = $request->method_payer;
        $product->created_by = Auth::id();

        $product->save();
        return redirect()->route('products.show', ['product' => $product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        // dd($product);
        if ($product) {
            return view('product_details')->with(['product' => $product]);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('edit_product')->with(['product' => $product]);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd('update product  ' . $request->file('photo'));
        // $product = $product;
        if (Auth::user()->is_admin || Auth::id() === $product->created_by) {

            $product = $this->initProduct($request, $product);

            $product->save();
        }

        return redirect()->route('products.show', ['product' => $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // $product->delete();
        // return redirect()->route('products.index');
    }

    public function initProduct(Request $request, $product)
    {


        if ($request->file('photo')) {
            $photo_name = $request->file('photo')->getClientOriginalName();
            $photo_name .= Auth::id() . '_' . $photo_name;
            $request->file('photo')->storeAs('public/images', $photo_name);
            $product->photo = $photo_name;
        }

        if (Auth::user()->is_admin) {
            $product->is_valid = $request->is_valid;
        }
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->state = $request->state;
        $product->type_transaction = $request->type_transaction;
        $product->quantity = $request->quantity;
        $product->address = $request->address;
        $product->marque = $request->marque;
        $product->method_payer = $request->method_payer;

        return $product;
    }

    public function myProducts()
    {
        $products = Auth::user()->products;
        return view('tables.products')->with('products', $products);
    }

    public function panier()
    {
        // $panier = Auth::user()->panier;
        return view('tables.panier');
        // ->with('products', $products);
    }


    public function search(Request $request)
    {
        $products = Product::where('title', 'like', '%' . $request->search . '%')->get();
        // dd($products);

        return view('tables.products')->with(['products' => $products, 'title' => 'Search " ' . $request->search . ' "']);
    }
}
