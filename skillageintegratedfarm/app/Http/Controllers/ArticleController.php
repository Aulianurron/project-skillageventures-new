<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = CategoryArticle::get();
        $articles = Article::all();
        return view('pages.admin.article.index', compact('categories', 'articles'));
    }

    /**`
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryArticle::all();
        $articles = Article::all();
        return view('pages.admin.article.partials.create-modal', compact('categories', 'articles'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_articles_id' => 'required|exists:category_article,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

    Article::create([
            'category_articles_id' => $request->category_article_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('pages.admin.article.index')
            ->with('success', 'article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryArticle $categories, Article $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        return view('pages.admin.article.partials.edit-modal', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    
    {
        $request->validate([
            'category_articles_id' => 'required|exists:category_article,id',
            'title' => 'required|string|max:255',
            'description' => 'required||max:256',
        ]);

        $articles = Article::findOrFail($id);
        $articles->status = $request->status;
        
        $articles->update([
            'category_articles_id' => request('category_article_id'),
            'title' => request('title'),
            'description' => request('description'),
        ]);

        // dd($categories);
        return redirect()->route('pages.admin.article.index')
            ->with('success', 'article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
        $articles = A::findOrFail($id);

        $articles->delete();

        return redirect()->route('pages.admin.article.index')
            ->with('success', 'article deleted successfully.');
    }
}