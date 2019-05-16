<?php

namespace App\Http\Controllers;
use App\Article;

class ArticleController extends Controller
{

    public function index() {
        // return 'haha';
        $articles = Article::all();
        // return view('welcome');
        return view('article.index', ['articles' => $articles]);
    
    }

    public function show($id) {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

}