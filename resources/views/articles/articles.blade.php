@extends('layouts.main')
@section('head.title')
    Trang chủ Blog
@endsection
@section('body.content')
	<?php function catchuoi($chuoi,$gioihan){			
    if(strlen($chuoi)<=$gioihan)
    {
        return $chuoi;
    }
    else{  
        if(strpos($chuoi," ",$gioihan) > $gioihan){
            $new_gioihan=strpos($chuoi," ",$gioihan);
            $new_chuoi = substr($chuoi,0,$new_gioihan)."...";
            return $new_chuoi;
        }
        $new_chuoi = substr($chuoi,0,$gioihan)."...";
        return $new_chuoi;
    }
	}?>
    @foreach($articles as $a)
        <h2 id="title">{{$a->title}}</h2>
        <p id="title">{{ catchuoi($a->content,1000) }}</p>
        <a style="text-decoration: none;" href="{{route('articles.show', $a->id)}}">Read more</a>
    @endforeach

    <div style="margin-top: 50px;">
    	{{ $articles->render()}};
    </div>
@endsection