<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\LinkProduct;

class ProductController extends Controller
{
    public function index()
    {
        $products['products']=Product::get();
        
        return view('pages.produk', $products);

        
    }

    public function show($slug)
    {
        $products['products']=Product::with('link_product')->where('slug', $slug)->first();
        $products['otherproducts'] = Product::all();
        
        return view('pages.detail-product', $products);
    }
}
