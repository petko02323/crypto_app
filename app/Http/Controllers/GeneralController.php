<?php

namespace App\Http\Controllers;

use App\Models\Article;

class GeneralController
{
    public function blog(){
        $articles = Article::all();
        return view('blog', compact(['articles']));
    }

    public function postDetail($id){
        $post = Article::firstWhere("id", $id);
        $articles = Article::all();
        return view('blogdetail', compact(['post', 'articles']));
    }
}
