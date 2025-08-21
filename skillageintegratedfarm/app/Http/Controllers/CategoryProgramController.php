<?php

namespace App\Http\Controllers;

use App\Models\CategoryProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryProgramController extends Controller
{
     // Menampilkan daftar kategori program
     public function index()
     {
         $categories = CategoryProgram::all();
         return view('pages.admin.category-program.index', compact('categories'));
     }
 
     public function create()
     {
         return view('pages.admin.category-program.partials.create-modal');
     }
 
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:256',
            'description' => 'required|string|max:256',
            'image' => 'required|image|max:2048',
         ]);


        //  if ($request->hasFile('image')) {
        //      $imagePath = $request->file('image')->store('category_program_images', 'public');
        //         $categories->image=$imagePath->Image ;
             
        //  }
        
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = 'img/image_product/' . $imageName;
            $image->move(base_path('public/img/image_product'), $imageName);
         
         CategoryProgram::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);
         
         


         return redirect()->route('category-program.index')->with('success', 'Category created successfully');
     }
 
     public function edit($id)
     {
         $categories = CategoryProgram::findOrFail($id);
         return view('pages.admin.category-program.index', compact('category'));
     }
 
     public function update(Request $request, $id)
     {
         $categories = CategoryProgram::findOrFail($id);
         $request->validate([
             'name' => 'required',
             'image' => 'nullable|image|max:2048',
             'description' => 'nullable|string'
         ]);
 
         $categories->name = $request->name;
 
         if ($request->hasFile('image')) {
             $imagePath = $request->file('image')->store('category_images', 'public');
             $categories->image = $imagePath;
         }
 
         $categories->save();
 
         return redirect()->route('category-program.index')->with('success', 'Category updated successfully');
     }
 
     public function destroy($id)
     {
         $categories = CategoryProgram::findOrFail($id);
         $categories->delete();
 
         return redirect()->route('category-program.index')->with('success', 'Category deleted successfully');
     }
    
}
