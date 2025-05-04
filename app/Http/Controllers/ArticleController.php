<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Quantity;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('admins.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quantities = Quantity::where('deleted', 0)->get();
        $categories = Category::where('deleted', 0)->get();
        return view('admins.add_article', compact('quantities', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['created_by'] = $data['updated_by'] = auth()->id();
        Article::create($data);
        return redirect()->route('articles.index')->with(['message'=>__('locale.save', [
            'param'=>__('locale.article', ['prefix'=>'', 'suffix'=>'s'])
        ])]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view('admins.article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $quantities = Quantity::where('deleted', 0)->get();
        $categories = Category::where('deleted', 0)->get();
        $article = Article::find($id);
        return view('admins.edit_article', compact('quantities', 'categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except(['_token', '_method']);
        $article = Article::find($id);

        $article->update($data);
        return redirect()->route('articles.index')->with(['message'=>__('locale.update', [
            'param'=>__('locale.article', ['prefix'=>'', 'suffix'=>''])
        ])]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);

        $article->update(['deleted'=>1]);
        return back()->with(['message'=>__('locale.delete', [
            'param'=>__('locale.article', ['prefix'=>'', 'suffix'=>''])
        ])]);
    }
}
