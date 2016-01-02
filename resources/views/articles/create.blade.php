@extends('layouts.main')
@section('head.title')
    Thêm bài viết mới
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

    {!!Form::open([
    	'route'  => 'articles.store',
    	'method' => 'POST',
    	'role'   => 'form'
    	])
    !!}
    <div class="form-group">
    	{!! Form::label('title','Tiêu đề') !!}
    	{!! Form::text('title','', ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Nhập tiêu đề bài viết']) !!}
    </div>

       <div class="form-group">
    	{!! Form::label('content','Nội dung') !!}
    	{!! Form::textarea('content','', ['class' => 'form-control', 'id' => 'content', 'placeholder' => 'Nhập nội dung bài viết']) !!}
    </div>
	
	<button type="submit" class="btn btn-primary">Tạo bài viết</button>
    {!!Form::close()!!}
@endsection