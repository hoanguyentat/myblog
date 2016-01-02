@extends('layouts.main')
@section('head.title')
    Thêm bài viết mới
@endsection
@section('body.content')
    <form action="{{route('articles.store')}}" method="POST" role="form">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
    	<div class="form-group">
    		<label for="title">Tiêu đề</label>
    		<input type="text" class="form-control" name="title" id="title" placeholder="Tiêu đề của bài viết">
    	</div>
    	
    	<div class="form-group">
    		<label for="content">Nội dung</label>
    		<textarea style="height: 250px;" type="text" class="form-control" name="content" id="content" placeholder="Nhập nội dung bài viết"></textarea> 
    	</div>        	
    
    	<button type="submit" class="btn btn-primary">Tạo bài viết</button>
    </form>
@endsection