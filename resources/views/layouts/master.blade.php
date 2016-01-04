<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('head.title')</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/admin.css">
	@yield('head.css')
</head>
<body>
	<div class="wrapper">
		@include('layouts.header')
		@include('layouts.navbar')
		<div class="container-fluid">
			<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 col-lg-8 col-lg-offset-2">
				<div class="row">
					<div class="col-md-8 col-sm-6 col-lg-8">
						@yield('body.content')
					</div>
					<div class="col-md-4 col-sm-6 col-lg-4">
						@yield('body.content1')
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.footer')
		<script type="text/javascript" src="/js/jquery/jquery.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		@yield('body.js')
</body>
</html>