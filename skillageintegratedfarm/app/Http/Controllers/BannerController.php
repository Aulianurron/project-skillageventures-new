<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners['banners'] = Banner::all();
        return view('pages.admin.banner.index', $banners);
    }

    public function create()
    {
        return view('banner.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        'status' => 'required|string',
    ]);

    $image = $request->file('image');
    $imageName = time() . '_' . $image->getClientOriginalName();
    $imagePath = 'img/image_banner/' . $imageName;
    $image->move(base_path('public_html/img/image_banner'), $imageName);

    $banner = new Banner();
    $banner->image = $imagePath; // Simpan path gambar
    $banner->status = $request->status;
    $banner->save();

    return redirect()->route('banners.index')->with('success', 'Banner created successfully!');
}


    public function edit(Banner $banner)
    {
       // Mengambil satu objek banners
        $banners = Banner::all();
        return view('pages.admin.banner.edit-modal', compact('banner'));
    }

    // public function update(Request $request, Banner $banner)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'status' => 'required|in:active,non_active',
    //     ]);

    //     $banner->name = $validatedData['name'];
    //     $banner->status = $validatedData['status'];

    //     if ($request->hasFile('image')) {
    //         // Delete old image if it exists
    //         if ($banner->image) {
    //             Storage::disk('public')->delete($banner->image);
    //         }
    //         $banner->image = $request->file('image')->store('banners', 'public');
    //     }



    //     return redirect()->route('banners.index')->with('success', 'Banner updated successfully.');
    
    public function update(Request $request, $id)
    {
        $request->validate([

            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|string',
        
        ]);

        $banner = Banner::findOrFail($id);
        $banner->status = $request->status;

        // Update image if uploaded
        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::delete($banner->image);
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $banner->image = 'img/image_banners/' . $imageName;
            $image->move(base_path('public/img/image_banners'), $imageName);
        }

        

        $banner->save();

        return redirect()->route('banners.index')->with('success', 'banners updated successfully');
    }
    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully.');
    }
}