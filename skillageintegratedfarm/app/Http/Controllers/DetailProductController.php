<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LinkProduct;
use App\Models\Product;

class DetailProductController extends Controller
{
    public function index()
    {
        $link_products= LinkProduct::get();
        $products = Product::get();
        // dd($reviewsOrtu);
        return view('pages.detail-produk', compact('products','link_products'));
           
        

    }
}
