<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryArticle;


class CategoryArticleController extends Controller
{
    public function index()
    {
        $categories = CategoryArticle::get();
        return view('pages.admin.category-articles.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryArticle::all();
        return view('pages.admin.category-articles.partials.create-modal', compact('categories'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        CategoryArticle::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category-articles.index')
            ->with('success', 'kategori produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryArticle $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = CategoryArticle::findOrFail($id);
        return view('pages.admin.category-articles.partials.edit-modal', compact( 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
         $categories = CategoryArticle::findOrFail($id);
        $categories->update([
            'name' => request('name'),
        ]);

        // dd($categories);
        return redirect()->route('category-articles.index')
            ->with('success', 'kategori produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
        $categories = CategoryArticle::findOrFail($id);

        $categories->delete();

        return redirect()->route('category-articles.index')
            ->with('success', 'category article deleted successfully.');
    }
}
