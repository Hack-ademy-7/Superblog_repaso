<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
   public function __construct(){

    $this->middleware('auth');
    $categories = Category::all();
    View::share('categories', $categories);
   }

   public function create(){
       return view('article.create');
   }

   public function store(ArticleRequest $request){ 
     //mass asigment asociado al usuario
      $articledata = $request->except('_token');
      $articledata['imagen'] = $request['imagen']->store('public/articles');
     
      $article = Auth::user()->articles()->create($articledata);
     

      $article->tags()->attach($articledata['tags']);
      
      

       return redirect()->route('home')->withMessage('Articulo creado con éxito');
   }

   public function show($id){
     $article = Article::findOrFail($id);
     return view('article.show', compact('article'));
   }
}
