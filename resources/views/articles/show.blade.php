@extends('layouts.main')
@section('head.title')
    Xem bài viết
@endsection
@section('body.content')
<div class="row">
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
	<a href="/" style="text-decoration: none;" class="btn-link btn"><span class="glyphicon glyphicon-chevron-left" ></span> Quay lại</a>
    <h2 id="title">{{$articles->title}}</h2>
    <p id="title"><?php echo $articles->content ?></p>
    <div style="margin-top: 40px;">
        @if(auth()->user() && (auth()->user()->admin == 1))
    		<a class="btn btn-primary" href="{{route('articles.edit', $articles->id)}}" role="button">Chỉnh sửa bài viết</a>
    		<!-- <a class="btn btn-danger" href="{{route('articles.delete', $articles->id)}}" role="button">Xóa bài viết</a> -->
            <a class="btn btn-danger" data-toggle="modal" href='#modal-id'>Xóa bài viết</a>
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Cảnh báo:</h4>
                        </div>
                        <div class="modal-body">
                            <h3>Bạn có muốn xóa bài viết này không?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button btn-default" class="btn btn-default" data-dismiss="modal">Không</button>
                            <a class="btn btn-danger" href="{{route('articles.delete', $articles->id)}}" role="button">Chấp nhận</a>
                        </div>
                    </div>
                </div>
            </div>
    	@endif
    </div>
    <div style="padding-top: 100px;">
        <!-- @foreach($cmtArticles as $cmt)
        @if($cmt->articles_id == $articles->id)
            <h2>{{$cmt->username}}</h2>
            <h4>{{$cmt->comment}}</h4>
        @endif
        @endforeach -->
        <div class="fb-like" data-href="http://localhost:8000/articles/{{$articles->id}};" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
    <div>
<!--         {!!Form::open([
            'route'  => ['articles.storecoment',$articles->id],
            'method' => 'POST',
            'role' => 'form'
            ])
        !!}
        {!!Form::label('comment','Bình luận')!!}
        {!!Form::textarea('comment','',[ 'style' =>'height: 80px;', 'class' => 'form-control', 'id' => 'comment', 'placeholder' => 'Nhập nội dung bình luận'])!!}
        <button type="submit" class="btn btn-primary btn-sm">Viết bình luận</button>
        {!!Form::close()!!} -->
        <div class="fb-comments" data-href="http://localhost:8000/articles/{{$articles->id}}" data-numposts="5"></div>
    </div>
    <!-- <div style="padding-top: 100px;"> -->
        <!-- @foreach($cmtArticles as $cmt)
        @if($cmt->articles_id == $articles->id)
            <h2>{{$cmt->username}}</h2>
            <h4>{{$cmt->comment}}</h4>
        @endif
        @endforeach -->
    <!-- </div> -->
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
                            <h4><strong>{{catchuoi($rca->title,15) }}</strong></h4>
                            <h6>Ngày đăng: {{date($rca->updated_at)}}<h6>
                        </blockquote>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection