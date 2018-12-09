<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all()->sortByDesc("data");
        return view('admin.articles.index')->with('articles', $articles);
    }


    public function create()
    {
        return view('admin.articles.create');
    }


    public function store(Request $request)
    {
        $article = new Article();
        $article->fill($request->all())->save();
        return redirect()->route('admin.articles.index');
    }


    public function show(Article $article)
    {
        //
    }


    public function edit(Article $article)
    {
        return view('admin.articles.edit')->with('article', $article);
    }


    public function update(Request $request, Article $article)
    {
        $article->fill($request->all());
        $article->save();
        return redirect()->route('admin.articles.index');
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index');
    }
}
