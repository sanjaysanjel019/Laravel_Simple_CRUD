<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::inRandomOrder()->take(12)->get();
        return view('shop-view')->with('products', $products);
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('product')->with('product', $product);
    }
}
