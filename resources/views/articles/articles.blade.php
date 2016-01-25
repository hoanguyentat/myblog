@extends('layouts.main')
@section('head.title')
    Trang chủ
@endsection
@section('head.css')
    <link rel="stylesheet" type="text/css" href="/css/articles/articlespost.css">
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
    <div class="articlespost">
        <h2 id="titlepost">{{$a->title}}</h2>
        <p id="titlepost"><?php echo catchuoi($a->content,800); ?></p>
        <a id="titlepost" style="text-decoration: none;" href="{{route('articles.show', $a->id)}}"><strong>Read more</strong></a>
        <div style="float: right;">Đăng bởi: {{$a->username}}</div>
    </div>
    @endforeach
    <div id="pagination" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 40px;">
    	{{ $articles->render()}}
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
                            <h6>Ngày đăng: {{date('d/m/Y',strtotime($rca->updated_at))}}, lúc: {{date('H:m',strtotime($rca->updated_at))}}<h6>
                        </blockquote>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection