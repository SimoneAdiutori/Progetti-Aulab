<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function dashboard(){
        $acceptedArticle = Article::where('user_id' , Auth::user()->id)->where('is_accepted' , true)->orderBy('created_at' , 'desc')->get();
        $rejectedArticle = Article::where('user_id' , Auth::user()->id)->where('is_accepted' , false)->orderBy('created_at' , 'desc')->get();
        $unrevisionedArticle = Article::where('user_id' , Auth::user()->id)->where('is_accepted' , NULL)->orderBy('created_at' , 'desc')->get();

        return view('writer.dashboard' , compact('acceptedArticles' , 'rejectedArticles' , 'unrevisionedArticles'));
    }
}
