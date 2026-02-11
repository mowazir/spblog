<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('articles.index', [
            'article' => Auth::user()->article,
            
        ]);

        //  $article = Article::query()
        // ->where([
        //     'user' => Auth::id(),
        // ])->get();

            // $user = $request->user();

            // $article = Article::query()
            //     ->with(['name'])
            //     ->where('user_id', $user->id)
            //     ->recent();

        //return $article;

    }

    public function create()
    {

        return view('articles.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|string',
            'content' => 'required|string|min:3',
            // 'cover_image' => 'mimes:png,jpg|image',
            'category' => 'required',
        ]);
        
        //  Auth::user()->articles()->create([
        //     'title' => request('title'),
        //     'content' => request('content'),
        //     'cover_image' => request('cover_image'),
        //     'category' => request('category'),
        // ]);

         $art = Article::create([
            'title' => request('title'),
            'content' => request('content'),
            'cover_image' => request('cover_image'),
            'user_id' => Auth::id(),
            'category_id' => request('category'),
        ]);

        dd($art);
        return redirect('/articles');

    }


}
