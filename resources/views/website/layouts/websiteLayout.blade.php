<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product - Frozen Yogurt Shop</title>
	<link rel="stylesheet" href="{{asset("/css/web.css")}}" type="text/css">
	<script src="{{asset("/js/web.js")}}" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			@include('website.layouts.navbar')
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>
						@yield('header')
					</h1>
				</div>
			</div>
			<div>
				@yield('content')
			</div>
		</div>
		<div id="footer">
			<div>
				@include('website.layouts.footer')
			</div>
		</div>
	</div>
</body>
</html>
