<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;
use App\Models\Product;
use App\Models\CategoryProduct;

class ProductController extends Controller
{
    public function index()
    {
        $categories = CategoryProduct::get();
        $products = Product::all();
        return view('pages.admin.product.index', compact('categories', 'products'));
    }

    /**`
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryProduct::all();
        $products = Product::all();
        return view('pages.admin.product.partials.create-modal', compact('categories', 'products'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'category_product_id' => 'required|exists:category_products,id',
            'description' => 'required|string|max:255',
            'capital_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'tokopedia' => 'required|string|max:255',
            'shopee' => 'required|string|max:255',
            'stock' => 'required|integer',
            
        ]);

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $imagePath = 'img/image_product/' . $imageName;

        $image->move(base_path('public/img/image_product'), $imageName);

        Product::create([
            'product_name' => $request->product_name,
            'image' => $imagePath,
            'category_product_id' => $request->category_product_id,
            'description' => $request->description,
            'capital_price' => $request->capital_price,
            'selling_price' => $request->selling_price,
            'tokopedia' => $request->tokopedia,
            'shopee' => $request->shopee,
            'stock' => $request->stock,
           
        ]);

        return redirect()->route('product.index')
            ->with('success', 'produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryProduct $categories, Product $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('pages.admin.product.partials.edit-modal', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'category_product_id' => 'required|exists:category_products,id',
            'description' => 'required||max:256',
            'stock' => 'required|integer',
            'selling_price' => 'required|integer',
            'capital_price' => 'required|integer',
            'tokopedia' => 'required|string',
            'shopee' => 'required|string',
        ]);

        $products = Product::findOrFail($id);
        $products->status = $request->status;
        
        if ($request->hasFile('image')) {
            if ($products->image && file_exists(public_path($products->image))) {
                unlink(public_path($products->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = 'img/image_product/' . $imageName;
            $image->move(base_path('public/img/image_product'), $imageName);

            $products->image = $imagePath;
        }
        
        $products->update([
            'status' => $request->status,
            'product_name' => request('product_name'),
            'description' => request('description'),
            'selling_price' => request('selling_price'),
            'capital_price' => request('capital_price'),
            'tokopedia' => request('tokopedia'),
            'shopee' => request('shopee'),
            'stock' => request('stock'),
            'category_product_id' => request('category_product_id'),
            'image' => $imagePath,
        ]);

        // dd($categories);
        return redirect()->route('product.index')
            ->with('success', 'produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
        $products = Product::findOrFail($id);

        $products->delete();

        return redirect()->route('product.index')
            ->with('success', 'produk deleted successfully.');
    }
}
