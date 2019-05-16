<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //


public function index() {
    $articles = Article::all();
    return view('admin.article.index', ['articles' => $articles]);
}


/**
     * 顯示建立部落格新文章的表單。
     */
    public function create()
    {
        return view('admin.article.create');
    }


/**
     * 儲存一篇部落格新文章。
     *
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    // laravel會自動把表單收到的資料導進來,然後我們先把收進來的資料放在變數$request裡
    public function store(Request $request)
    {
       $request->validate([
           'title' => 'required|max:255',
           'image' => 'required',
           'content' => 'required',

        //    當驗證出現錯誤時, laravel會自動把錯誤丟到$error裡
       ]);

        $article = new Article();
        $article->title = $request->title;
        $article->image = $request->image;
        $article->content = $request->content;
        // 把表單裡name為content的資料丟到資料表article的cotent欄裡
        $article->save();

        return redirect('admin/article');
        //新增完文章,網頁會導回列表頁
    }


    // 會從 Route::delete('article/{article}'...) 的{article}去取得文章的id進來
    public function delete($id) {
        $article = Article::find($id);
        // 使用model(Article) 並透過eloquent和資料表連結 找出該id的文章

        $article->delete();

        return redirect('admin/article');
    }

    



}
