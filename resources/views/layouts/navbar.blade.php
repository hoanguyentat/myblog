<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<!-- <a id="HomeSmall" style="text-decoration: none;" href="">TEC Club</a> -->
	<div class="navbar-header">
	<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="padding-top: 9px;">
			<a id="HomeSmall" href="/"><strong><b style="font-size: 25px">H</b>ola<b style="font-size: 25px">B</b>log</strong></a>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<!-- <div class="col-sm-offset-3"> -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li id="navbar-button"><a class="navbar-button" href="/">Trang chủ</a></li>
			@if (Auth::check())
				<li id="navbar-button"><a class="navbar-button" href=" {{route('articles.create')}} ">Tạo bài viết mới</a></li>
			@endif
			<li class="dropdown">
				<a id= "dropDown" href="#" class="dropdown-toggle navbar-button" data-toggle="dropdown">More<b class="caret"></b></a>
				<ul id="dropdown-menu" class="dropdown-menu">
					<li><a href="{{route('about.me')}}">Giới thiệu bản thân</a></li>
					<li><a href="#">Chưa biết làm gì</a></li>
				</ul>
			</li>
		</ul>
		<form class="navbar-form navbar-right" role="search">
			@if (Auth::check())
				<li style="list-style: none;" class="dropdown">
					<a href="#" style="text-decoration: none;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }}<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ url('/logout') }}">Đăng xuẩt</a></li>
					</ul>
				</li>
			@else
			<a class="btn btn-primary" href="/login" role="button">Đăng nhập</a>
			@endif
		</form>
	</div>
</nav>
