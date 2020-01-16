<?php

namespace App\Http\Controllers\frontend;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->latestFirst()->paginate(10);
        return view('frontend.article', compact('articles'));
    }

    public function show(Article $articles)
    {
        //$articles = Article::findorfail($id);
        return view('frontend.show_article', compact('articles'));
    }
}
