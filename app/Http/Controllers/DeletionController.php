<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class DeletionController extends Controller
{
    public function showArticle(){
        $articles = Article::all();

        return view('deleteArticle', ['articles' => $articles]);
    }

    public function deleteArticle($id){
        $article = Article::where('id', $id)->first();
        $article->delete();

        return redirect('/9291');
    }
}
