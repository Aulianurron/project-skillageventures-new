<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryExpense;
use Illuminate\Http\Request;

class CategoryExpenseController extends Controller
{
    public function index()
    {
        $categories = CategoryExpense::get();
        return view('pages.admin.category-pengeluaran.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryExpense::all();
        return view('pages.admin.category-pengeluaran.partials.create-modal', compact('categories'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',

        ]);

        CategoryExpense::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category-expense.index')
            ->with('success', 'kategori produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryExpense $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = CategoryExpense::findOrFail($id);
        return view('pages.admin.category-pengeluaran.partials.edit-modal', compact( 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categories = CategoryExpense::findOrFail($id);
        $categories->update([
            'name' => request('name'),
        ]);

        // dd($categories);
        return redirect()->route('category-expense.index')
            ->with('success', 'kategori produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
        $categories = CategoryExpense::findOrFail($id);

        $categories->delete();

        return redirect()->route('category-expense.index')
            ->with('success', 'kategori pengeluaran successfully.');
    }

}
