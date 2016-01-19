<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('head.title')</title>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	@yield('head.css')
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1508433499452268";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	@include('layouts.header')
	<div class="wrapper">
		@include('layouts.navbar')
			<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				<div class="row">
					<div class=" col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-2 col-sm-12 col-xs-12">
							@yield('body.content')
					</div>
					<div class="col-xs-12 col-sm-8 col-md-3 col-lg-3">
						@yield('body.recentarticles')
					</div>
				</div>
			</div>
		<a id="toTop" href="#" style="float:right"></a>
	</div>
	@include('layouts.footer')
		<script type="text/javascript" src="/js/jquery/jquery.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/style.js"></script>
		@yield('body.js')
	
</body>
</html>