<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        
        return view('home',['product'=>$product]);
    }
}
