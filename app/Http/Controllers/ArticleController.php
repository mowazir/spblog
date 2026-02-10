<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function index()
    {
        // return view('articles.index', [
        //     'articles' => Auth::user()->articles,
        // ]);

         $article = Article::query()
        ->where([
            'user_id' => Auth::id(),
        ])->get();

    }



}
