<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;

class CategoryProductController extends Controller
{
    public function index()
    {
        $categories = CategoryProduct::get();
        return view('pages.admin.category-product.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryProduct::all();
        return view('pages.admin.category-product.partials.create-modal', compact('categories'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image',
        ]);

        $photo = $request->file('photo');
        $photoName = time() . '_' . $photo->getClientOriginalName();
        $photoPath = 'img/category_photo/' . $photoName;

        $photo->move(base_path('public/img/category_product_photo'), $photoName);

        CategoryProduct::create([
            'name' => $request->name,
            'photo' => $photoPath,
        ]);

        return redirect()->route('category-product.index')
            ->with('success', 'kategori produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryProduct $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = CategoryProduct::findOrFail($id);
        return view('pages.admin.category_product.partials.edit-modal', compact( 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image',
        ]);

        $categories = Categoryproduct::findOrFail($id);
        
        if ($request->hasFile('photo')) {
            if ($categories->photo && file_exists(public_path($categories->photo))) {
                unlink(public_path($categories->photo));
            }

            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photoPath = 'img/category_product_photo/' . $photoName;
            $photo->move(base_path('public/img/category_product_photo'), $photoName);

            $categories->photo = $photoPath;
        }
        $categories->update([
            'name' => request('name'),
            'photo' => $photoPath
        ]);

        // dd($categories);
        return redirect()->route('category-product.index')
            ->with('success', 'kategori produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
        $categories = Categoryproduct::findOrFail($id);

        $categories->delete();

        return redirect()->route('category-product.index')
            ->with('success', 'kategori produk deleted successfully.');
    }
}
