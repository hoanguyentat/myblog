@extends('layouts.main')
@section('head.title')
    Chỉnh sửa bài viết
@endsection
@section('head.css')
    <link rel="stylesheet" type="text/css" href="/css/editarticles.css">
@endsection
@section('body.content')
    	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Có lỗi xảy ra:</strong></br>
			<ul>
				@foreach($errors->all() as $error)	 
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

    {!!Form::model($articles,[
    	'route'  => ['articles.update', $articles->id],
    	'method' => 'PUT',
    	'role'   => 'form'
    	])
    !!}
    <div class="form-group">
    	{!! Form::label('title','Tiêu đề') !!}
    	{!! Form::text('title',"$articles->title", ['class' => 'form-control', 'id' => 'title']) !!}
    </div>

       <div class="form-group">
    	{!! Form::label('content','Nội dung') !!}
        <div id="htmlcode">
            <button type="button" class="btn bnt-default" id="xuongdong">Xuống dòng</button>
            <button type="button" class="btn bnt-default" id="dam"><span class="glyphicon glyphicon-bold"></span></button>
            <button type="button" class="btn bnt-default" id="nghieng"><span class="glyphicon glyphicon-italic"></span></button>
            <button type="button" class="btn bnt-default" id="link">Link</button>
            <button type="button" class="btn bnt-default" id="blockquote">Blockquote</button>
        </div>
    	{!! Form::textarea('content',"$articles->content", ['class' => 'form-control', 'id' => 'editcontent']) !!}
    </div>
	
	<button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-info" href="{{route('articles.show',$articles->id)}}">Cancel</a>
    {!!Form::close()!!}
@endsection
@section('body.js')
    <script type="text/javascript" src="/js/articlesedit.js"></script>
@endsection