@extends('layouts.main')
@section('head.title')
    Trang chủ Blog
@endsection
@section('body.content')
    @foreach($articles as $a)
        <h2>{{$a->title}}</h2>
        <p>{{$a->content}}</p>
        <a style="text-decoration: none;" href="{{route('articles.show', $a->id)}}">Read more</a>
    @endforeach

    <div style="margin-top: 50px;">
    	{{ $articles->render()}};
    </div>
@endsection