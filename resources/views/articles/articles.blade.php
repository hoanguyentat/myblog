@extends('layouts.main')
@section('head.title')
    Trang chủ
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
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div style="margin-top: 50px;">
        	{{ $articles->render()}}
        </div>
    </div>
@endsection
@section('body.recentarticles')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Các bài mới đăng gần đây</h4>
        </div>
        <div class="panel-body">
            @foreach($rcArticles as $rca)
                <a style="text-decoration: none;" href="{{route('articles.show', $rca->id)}}">
                   <div class="container">
                        <blockquote>
                            <h4><strong>{{catchuoi($rca->title,20) }}</strong></h4>
                            <h6>Ngày đăng: {{date($rca->updated_at)}}<h6>
                        </blockquote>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection