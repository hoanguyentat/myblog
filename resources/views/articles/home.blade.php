@extends('layouts.main')
@section('head.title')
    Trang chủ Blog
@endsection
@section('body.content')
    @foreach($articles as $a)
        <h2>{{$a->title}}</h2>
        <p>{{$a->content}}</p>
        <a style="text-decoration: none;" href="{{route('get.articles',$a->id)}}">Read more</a>
    @endforeach
@endsection