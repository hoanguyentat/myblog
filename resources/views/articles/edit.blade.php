@extends('layouts.main')
@section('head.title')
    Chỉnh sửa bài viết
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
            <button type="button" class="btn bnt-default" id="Dam"><span class="glyphicon glyphicon-bold"></span></button>
            <button type="button" class="btn bnt-default" id="Nghieng"><span class="glyphicon glyphicon-italic"></span></button>
            <button type="button" class="btn bnt-default" id="Link">Link</button>
            <button type="button" class="btn bnt-default" id="blockquote">Blockquote</button>
        </div>
    	{!! Form::textarea('content',"$articles->content", ['class' => 'form-control', 'id' => 'editcontent']) !!}
    </div>
	
	<button type="submit" class="btn btn-primary">Update</button>
    {!!Form::close()!!}
@endsection