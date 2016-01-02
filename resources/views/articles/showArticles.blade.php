@extends('layouts.main')
@section('head.title')
    Xem chu de
@endsection
@section('body.content')
		<a href="/" style="text-decoration: none;" class="btn-link btn"><span class="glyphicon glyphicon-chevron-left" ></span> Quay lại</a>
        <h2>{{$articles->title}}</h2>
        <p>{{$articles->content}}</p>
@endsection
