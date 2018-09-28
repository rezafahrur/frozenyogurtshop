<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frozen Yogurt Shop</title>
	<link rel="stylesheet" href="{{asset("/css/web.css")}}" type="text/css">
	<script src="{{asset("/js/web.js")}}" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="/" class="logo"><img src="{{ asset("images/logo.png") }}" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="/">Home</a>
					</li>
					<li class="menu">
						<a href="about">About</a>
						<ul class="primary">
							<li>
								<a href="product">Product</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="blog">Blog</a>
          </li>
					<li>
						<a href="contact">Contact</a>
          </li>
          <li>
            <a href="admin/produk" target="_blank">Admin</a>
          </li>
				</ul>
			</div>
		</div>
		<div id="body" class="home">
			<div class="header">
				<img src="{{ asset("images/bg-home.jpg") }}" alt="">
				<div>
					<a href="product">Freeze Delight</a>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<h1>NEW PRODUCT</h1>
						<h2>The Twist of Healthy Yogurt</h2>
						<p>This website template has been designed by freewebsitetemplates.com for you, for free. You can replace all this text with your own text.</p>
					</div>
					<img src="{{ asset("images/yogurt.jpg") }}" alt="">
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
							<a href="product.html" class="product"></a>
							<h1>PRODUCTS</h1>
						</li>
						<li>
							<a href="about" class="about"></a>
							<h1>OUR STORY</h1>
						</li>
						<li>
							<a href="product" class="flavor"></a>
							<h1>FLAVORS</h1>
						</li>
						<li>
							<a href="contact.html" class="contact"></a>
							<h1>OUR LOCATION</h1>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					@include('website.layouts.footer')
			</div>
		</div>
	</div>
</body>
</html>
