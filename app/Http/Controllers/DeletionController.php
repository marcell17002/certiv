<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Certification;
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

    public function showCertification(){
        $certifs = Certification::all();

        return view('deleteCertif', ['certifications' => $certifs]);
    }

    public function deleteCertification($certif_id){
        $certifs = Certification::where('certif_id', $certif_id);
        $certifs->delete();

        return redirect('/9290');
        
    }
}
