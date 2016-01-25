@extends('layouts.main')
@section('head.title')
    Thêm bài viết mới
@endsection
@section('head.css')
    <link rel="stylesheet" type="text/css" href="/css/articles/editarticles.css">
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
        <div id="htmlcode">
            <div id = "dropdown-edit" class="btn btn-default">
                <div id = "dropdown-form">Paragraph <span class="glyphicon glyphicon-chevron-down"></span></div>
                <div id="dropdown-content">
                    <h2 id="heading2">Heading 2</h2>
                    <h3 id="heading3">Heading 3</h3>
                    <h4 id="heading4">Heading 4</h4>
                    <h5 id="heading5">Heading 5</h5>
                    <h6 id="heading6">Heading 6</h6>
                </div>
            </div>
            <button type="button" class="btn bnt-default" id="xuongdong">Xuống dòng</button>
            <button type="button" class="btn bnt-default" id="dam"><span class="glyphicon glyphicon-bold"></span></button>
            <button type="button" class="btn bnt-default" id="nghieng"><span class="glyphicon glyphicon-italic"></span></button>
            <button type="button" class="btn bnt-default" id="link">Link</button>
            <button type="button" class="btn bnt-default" id="blockquote">Blockquote</button>
        </div>
    	{!! Form::textarea('content','', ['class' => 'form-control', 'id' => 'content', 'placeholder' => 'Nhập nội dung bài viết']) !!}
    </div>
	
	<button type="submit" class="btn btn-primary">Tạo bài viết</button>
    {!!Form::close()!!}
@endsection
@section('body.js')
    <script type="text/javascript" src="/js/articles/articlesedit.js"></script>
@endsection