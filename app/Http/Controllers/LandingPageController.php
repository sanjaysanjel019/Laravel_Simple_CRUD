<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Taking certain number of random products and displaying them
        $products = Product::inRandomOrder()->take(8)->get();

        //Returning the view to the landing pages with 8 random products
        return view('landingpage')->with('products', $products);
        // return response()->json($products);
    }
}
