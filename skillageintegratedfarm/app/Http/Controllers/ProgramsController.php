<?php

namespace App\Http\Controllers;
use App\Models\Programs;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index()
    {
        $programs=Programs::get();     
        // dd($reviewsOrtu);
        return view('pages.program',  compact( 'programs')
        
    );

    }

    public function show($slug)
    {
        $programs['programs']=Programs::with('program')->where('slug', $slug)->first();
        $programs['otherprograms'] = Programs::all();
        
        return view('pages.detail-program', $programs);    
    }

}
