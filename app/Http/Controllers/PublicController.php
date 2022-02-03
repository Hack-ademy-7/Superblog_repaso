<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function index() {
        return view('home');
    }

    public function all(){
        $articles = Article::all();
           return view('article.index', compact('articles'));
       }
}

