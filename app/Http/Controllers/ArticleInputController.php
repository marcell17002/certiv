<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleInputController extends Controller
{
    public function input(Request $data){
        $article = new Article;

        $article->header = $data->header;
        $article->shortDesc = $data->short_desc;
        $article->isi = $data->isi;
        $article->url = $data->url;

        $article->save();

        return redirect('/9796');
    }
}
