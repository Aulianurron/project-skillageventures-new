<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Product;
use App\Models\Programs;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('status', '=', 'active')->first();
    $products = Product::limit(6)->get();
    $programs = Programs::limit(6)->get(); 
    //dd($banners);
    return view ('pages.home',[
        'banners'=> $banners,
        'products'=> $products,
        'programs'=> $programs
    ]);
    }
}
