<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticlesComment;
use App\User;

use Auth;
use Input;
use App\Http\Requests\ArticleFormRequest;
use App\Http\Requests\CommentFormRequest;

class ArticlesController extends Controller
{

	public function index(){
		$articles = Article::orderBy('id','dsc')->paginate(10);
		$rcArticles = Article::orderBy('id','dsc')->take(5)->get();
		return view('articles/articles')->with(compact(['articles','rcArticles']));
	}
   
	public function show($id){
		$articles = Article::find($id);
		$rcArticles = Article::orderBy('id','dsc')->take(5)->get();
		$cmtArticles = ArticlesComment::all();
		// dd($id);
		// dd($cmtArticles);
		return view('articles/show')->with(compact(['articles','cmtArticles','rcArticles']));
	}

	public function commentUpdate(CommentFormRequest $request, $id){

		$articles_comment = $request->input('comment');

		$articles = Article::find($id);

		ArticlesComment::create([
			'articles_id' => $id,
			'articles_title' => $articles->title,
			'comment' => $articles_comment,
			'username' => auth()->user()->name
		]);
		return redirect()->route('articles.show',$id);
	}

	public function create(){
		return view('articles/create');
		// $he = User::where('name','=',auth()->user()->name)->get();
		// $he = auth()->user()->name;
		// $user = User::find($he);
		// $user = auth()->user()->name;
		// dd($user);
	}

	public function store(ArticleFormRequest $request){
		$title = $request->input('title');
		$content = $request->input('content');

		Article::create([
			'title' => $title,
			'content' => $content,
			'username' => auth()->user()->name
			]);
		return redirect()->route('get.articles');
	}

	public function edit($id){
		$articles = Article::find($id);
		return view('articles/edit', compact('articles'));
	}

	public function update(ArticleFormRequest $request, $id){
		$title = $request->get('title');
		$content = $request->get('content');

		$articles = Article::find($id);
		$articles->update([
			'title'   => $title,
			'content' => $content
			]);
		return redirect()->route('get.articles');
	}

	public function delete($id){

		$articles = Article::find($id);
		$articles->delete();

		return redirect()->route('get.articles');
	}

	public function unauthorized(){
		return view('/errors/unauthorized');
	}
}
