<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Input;
use App\Http\Requests\ArticleFormRequest;

class ArticlesController extends Controller
{

	public function index(){
		$articles = Article::all();
		return view('articles/articles', compact('articles'));
	}
   
	public function show($id){
		$articles = Article::find($id);
		return view('articles/showArticles', compact('articles'));
	}

	public function create(){
		return view('articles/createArticles');
	}

	public function store(ArticleFormRequest $request){
		$title = $request->input('title');
		$content = $request->input('content');

		Article::create([
			'title' => $title,
			'content' => $content
			]);
		return redirect()->route('get.articles');
	}
}
