<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\LinkProduct;

class LinkProductController extends Controller
{
    public function index()
    {
        $link_products = LinkProduct::get();
        $products = Product::get();
        // dd($products);
        return view('pages.admin.link-product.index', compact('products','link_products'));
    }

    // public function show(DetailOrder $detail_orders, $id)
    // {
    //     $detail_orders['detail_orders'] = DetailOrder::with('product')->where('order_id', $id)->get();
    //     //dd($detail_orders);
    //     return view('pages.admin.detail-order.index', $detail_orders);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $link_products = LinkProduct::all();
        $products = Product::all();
        return view('pages.admin.link-product.partials.create-modal', compact('link_products', 'products'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'link_product' => 'required|string|max:255',
            'marketplace_name' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
        ]);

        LinkProduct::create([
            'marketplace_name' => $request->marketplace_name,
            'product_id' => $request->product_id,
            'link_product' => $request->link_product,
        ]);

        return redirect()->route('link-product.index')
            ->with('success', 'link produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $products, LinkProduct $link_products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $link_products = LinkProduct::findOrFail($id);
        return view('pages.admin.link-product.partials.edit-modal', compact('link_products', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    
    {
        $request->validate([
            'link_product' => 'required|string|max:255',
            'marketplace_name' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
        ]);

        $link_products = LinkProduct::findOrFail($id);
        
        $link_products->update([
            'link_product' => request('link_product'),
            'marketplace_name' => request('marketplace_name'),
            'product_id' => request('product_id'),
        ]);

        // dd($categories);
        return redirect()->route('link-product.index')
            ->with('success', 'link produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
        $link_products = LinkProduct::findOrFail($id);

        $link_products->delete();

        return redirect()->route('link-product.index')
            ->with('success', 'link produk deleted successfully.');
    }
}
