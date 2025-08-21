<?php

namespace App\Http\Controllers;

use App\Models\CategoryProgram;
use Illuminate\Http\Request;
use App\Models\Programs;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        $categories = CategoryProgram::all();
        $programs = Programs::all();
        return view('pages.admin.program.index', compact('categories', 'programs'));
    }

    public function indexhome()
    {
        $programs = Programs::all();
        return view('pages.program', compact( 'programs'));
    }

    public function create()
    {
        $categories = CategoryProgram::all();
        return view('pages.admin.program.partials.create-modal', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:256',
            'description' => 'required|string|max:2048',
            'image' => 'required|image|max:2048',
            'category_program_id' => 'required|exists:category_programs,id',
            'status' => 'required|string|max:2048',
            'document_program' => 'required|file|max:2048',
        ]);

        // Handle image upload
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $imagePath = 'img/image_program/' . $imageName;
        $image->move(base_path('img/image_program'), $imageName);

        // Handle document upload
        $document = $request->file('document_program');
        $documentName = time() . '_' . $document->getClientOriginalName();
        $documentPath = 'document/document_program/' . $documentName;
        $document->move(base_path('public/document/document_program'), $documentName);

        // Create new program
        Programs::create([
    'name' => $request->name,
    'slug' => Str::slug($request->name), 
    'image' => $imagePath,
    'description' => $request->description,
    'status' => $request->status,
    'category_program_id' => $request->category_program_id,
    'document_program' => $documentPath,
]);

        return redirect()->route('program.index')->with('success', 'Program created successfully');
    }

    public function edit($id)
    {
        $program = Programs::findOrFail($id); // Mengambil satu objek program
        $categories = CategoryProgram::all();
        return view('pages.admin.program.partials.edit-modal', compact('program', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_program_id' => 'required|exists:category_programs,id',
            'status' => 'required|string',
            'document_program' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $program = Programs::findOrFail($id);

        $program->name = $request->name;
        $program->description = $request->description;
        $program->category_program_id = $request->category_program_id;
        $program->status = $request->status;

        // Update image if uploaded
        if ($request->hasFile('image')) {
            if ($program->image) {
                Storage::delete($program->image);
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $program->image = 'img/image_program' . $imageName;
            $image->move(base_path('img/image_program'), $imageName);
        }

        // Update document if uploaded
        if ($request->hasFile('document_program')) {
            if ($program->document_program) {
                Storage::delete($program->document_program);
            }
            $document = $request->file('document_program');
            $documentName = time() . '_' . $document->getClientOriginalName();
            $program->document_program = 'document/document_program/' . $documentName;
            $document->move(base_path('public/document/document_program'), $documentName);
        }

        $program->save();

        return redirect()->route('program.index')->with('success', 'Program updated successfully');
    }


    public function show($id)
    {
        $program = Programs::findOrFail($id);
        $otherPrograms = Programs::where('id', '!=', $id)->get(); // Get other programs
        return view('pages.detail-program', compact('program', 'otherPrograms'));
    }

    public function destroy($id)
    {
        $program = Programs::findOrFail($id);

        // Delete files if they exist
        if ($program->image) {
            Storage::delete($program->image);
        }
        if ($program->document_program) {
            Storage::delete($program->document_program);
        }

        $program->delete();

        return redirect()->route('program.index')->with('success', 'Program deleted successfully');
    }
}
