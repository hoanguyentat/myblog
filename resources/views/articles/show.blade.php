@extends('layouts.main')
@section('head.title')
    Xem bài viết
@endsection
@section('body.content')
		<a href="/" style="text-decoration: none;" class="btn-link btn"><span class="glyphicon glyphicon-chevron-left" ></span> Quay lại</a>
        <h2 id="title">{{$articles->title}}</h2>
        <p id="title">{{$articles->content}}</p>
        <div style="margin-top: 40px;">
            @if(auth()->user() && (auth()->user()->admin == 1))
        		<a class="btn btn-primary" href="{{route('articles.edit', $articles->id)}}" role="button">Chỉnh sửa bài viết</a>
        		<a class="btn btn-danger" href="{{route('articles.delete', $articles->id)}}" role="button">Xóa bài viết</a>
        	@endif
        </div>
@endsection
