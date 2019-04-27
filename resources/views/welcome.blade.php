<!DOCTYPE html>
<html lang="es">
<head>
	<title>Yum O' Clock BCN</title>
	<meta charset="UTF-8">
	<meta name="description" content="Yum O' Clock BCN">
	<meta name="keywords" content="Yum, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/IcoYum.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder 
	<div id="preloder">
		<div class="loader"></div>
	</div>
    -->
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="user-panel">
					<a href="#">Register</a> / 
					<a href="#">Login</a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<img src="img/LogoYum_opt_2.jpg" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<div class="header-search">
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
				<ul class="main-menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">Features</a></li>
					<li><a href="recipes.html">Receipies</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


    <!-- Hero section -->
    
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-slide-item set-bg" data-setbg="img/Chontaduro1.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Yum O' Clock BCN</span></h2>
					<h2 class="hs-title-2"><span>Arte Culinario</span></h2>
					<h2 class="hs-title-3"><span>Chontaduro</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="img/SignatureBrunch.jpg">
				<div class="hs-text">
				<h2 class="hs-title-1"><span>Yum O' Clock BCN</span></h2>
					<h2 class="hs-title-2"><span>Arte Culinario</span></h2>
					<h2 class="hs-title-3"><span>Signature Brunch</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="img/Takumi.jpg">
				<div class="hs-text">
				<h2 class="hs-title-1"><span>Yum O' Clock BCN</span></h2>
					<h2 class="hs-title-2"><span>Arte Culinario</span></h2>
					<h2 class="hs-title-3"><span>Takumi Ramen</span></h2>
				</div>
			</div>
		</div>
    </section>

	<!-- Hero section end -->

<!-- Inicio Section Posts -->
	<section class="posts container">

	<!-- 	<article class="post no-image">
			<div class="content-post">
				<header class="container-flex space-between">
					<div class="date">
						<span class="c-gray-1">sep 20</span>
					</div>
					<div class="post-category">
						<span class="category text-capitalize">i do travel</span>
					</div>
				</header>
				<h1>No difference how many peaks you reach if there was no pleasure in the climb.</h1>
				<div class="divider"></div>
				<p>Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.</p>
				<footer class="container-flex space-between">
					<div class="read-more">
						<a href="#" class="text-uppercase c-green">read more</a>
					</div>
					<div class="tags container-flex">
						<span class="tag c-gray-1 text-capitalize">#yosemite</span>
						<span class="tag c-gray-1 text-capitalize">#peak</span>
						<span class="tag c-gray-1 text-capitalize">#explorer</span>
					</div>
				</footer>
			</div>
		</article> -->
		<!--Post Con Imagen-->

		@foreach ($posts as $post)
		<article class="post w-image">
			
			<div class="content-post">
				<header class="container-flex space-between">
					<div class="date"> 
					<span class="c-gray-1"> {{$post->fecha_publicacion->diffForHumans()}} </span>
					<!-- <span class="c-gray-1"> {{$post->fecha_publicacion->format('M d')}} </span> -->
					</div>
					<div class="post-category">
						<span class="category text-capitalize">{{ $post->category->categoria}}</span>
					</div>
				</header>
				<h1> {{$post->titulo}} </h1>
				<div class="divider"></div>
				<p>{{$post->contenido}} </p>
				<footer class="container-flex space-between">
					<div class="read-more">
						<a href="#" class="text-uppercase c-green">read more</a>
					</div>
					<div class="tags container-flex">
						@foreach($post->tags as $tag)
						<span class="tag c-gray-1 text-capitalize">#{{$tag->nombre}} </span>
						@endforeach
					</div>
					<figure><img src="img/Oasisnatural2.jpg" alt="" class="img-responsive"></figure>
				</footer>
			</div>	
	</article>
	@endforeach
		<!--Fin Post Con Imagen-->

		<!--Inicio Post Con Galeria-->

		<!--<article class="post w-gallery">
			<div class="gallery-photos masonry">
				<figure class="gallery-image"><img src="img/Chontaduro1.jpg" alt=""></figure>

				<figure class="gallery-image"><img src="img/Chontaduro2.jpg" alt=""></figure>

				<figure class="gallery-image"><img src="img/Chontaduro3.jpg" alt=""></figure>

				<figure class="gallery-image"><img src="img/Chontaduro1.jpg" alt=""></figure>
			</div>
			<div class="content-post">
				<header class="container-flex space-between">
					<div class="date">
						<span class="c-gray-1">sep 14</span>
					</div>
					<div class="post-category">
						<span class="category text-capitalize">i do photos</span>
					</div>
				</header>
				<h1>Everything in the universe has a rhythm, everything dances.</h1>
				<div class="divider"></div>
				<p>Donec hendrerit magna vitae metus viverra tincidunt. Cras dolor lacus, placerat sed nulla in, egestas pharetra neque. Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. Cras laoreet pulvinar dapibus. Nulla laoreet odio at nunc semper vestibulum. Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.</p>
				<footer class="container-flex space-between">
					<div class="read-more">
						<a href="#" class="text-uppercase c-green">read more</a>
					</div>
					<div class="tags container-flex">
						<span class="tag c-gray-1">#Yosemite</span>
						<span class="tag c-gray-1">#Photo</span>
						<span class="tag c-gray-1">#Hi-Res</span>
					</div>
				</footer>
			</div>
		</article> -->
<!-- Fin Post Con Galeria -->
		</section>
<!-- Fin Section Posts -->

	<!-- Add section end -->
	<!--
	<section class="add-section spad">
		<div class="container">
			<div class="add-warp">
				<div class="add-slider owl-carousel">
					<div class="as-item set-bg" data-setbg="img/Chontaduro1.jpg"></div>
					<div class="as-item set-bg" data-setbg="img/Chontaduro2.jpg"></div>
					<div class="as-item set-bg" data-setbg="img/Chontaduro3.jpg"></div>
				</div>
				<div class="row add-text-warp">
					<div class="col-lg-4 col-md-5 offset-lg-8 offset-md-7">
						<div class="add-text text-white">
							<div class="at-style"></div>
							<h2>Amazing deserts</h2>
							<ul>
								<li>Easy to make</li>
								<li>Step by Step Video Tutorial</li>
								<li>Gluten Free</li>
								<li>Healty  Ingredients</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	-->
	<!-- Add section end -->


	<!-- Recipes section -->
	<!--
	<section class="recipes-section spad pt-0">
		<div class="container">
			<div class="section-title">
				<h2>Latest recipes</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/1.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-md-6">
					<div class="recipe">
						<img src="img/recipes/2.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Italian home-made pasta</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/3.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Chesse Cake Tart</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/4.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/5.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Italian home-made pasta</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/6.jpg" alt="">
						<div class="recipe-info-warp">
								<div class="recipe-info">
								<h3>Chesse Cake Tart</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	-->
	<!-- Recipes section end -->


	<!-- Footer widgets section -->
	<!--
	<section class="bottom-widgets-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Top rated recipes</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/1.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Italian pasta</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/2.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>French Onion Soup</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/3.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Homemade  pasta</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/4.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Onion Soup Gratinee</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/4.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Feta Cheese Burgers</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Most liked recipes</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/6.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Traditional Food</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/7.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Baked Salmon</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/8.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Deep Fried Fish</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/9.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Raw Tomato Soup</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/10.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Vegan Food</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-4">
					<div class="sp-blog-item">
						<div class="blog-thubm">
							<img src="img/blog/1.jpg" alt="">
							<div class="blog-date">
								<span>May 04, 2018</span>
							</div>
						</div>
						<div class="blog-text">
							<h5>Italian restaurant Review</h5>
							<span>By Maria Williams</span>
							<p>Donec quam felis, ultricies nec, pellente sque eu, pretium quis, sem. Nulla conseq uat massa quis enim. </p>
							<a href="#" class="comment">2 Comments</a>
							<a href="#" class="readmore"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	-->
	<!-- Footer widgets section end -->


	<!-- Review section end -->
	<!--
	<section class="review-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
					<div class="review-item">
						<div class="review-thumb set-bg" data-setbg="img/thumb/11.jpg">
							<div class="review-date">
								<span>May 04, 2018</span>
							</div>
						</div>
						<div class="review-text">
							<span>March 14, 2018</span>
							<h6>Feta Cheese Burgers</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<div class="author-meta">
								<div class="author-pic set-bg" data-setbg="img/author.jpg"></div>
								<p>By Janice Smith</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
					<div class="review-item">
						<div class="review-thumb set-bg" data-setbg="img/thumb/12.jpg">
							<div class="review-date">
								<span>May 04, 2018</span>
							</div>
						</div>
						<div class="review-text">
							<span>March 14, 2018</span>
							<h6>Mozarella Pasta</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<div class="author-meta">
								<div class="author-pic set-bg" data-setbg="img/author.jpg"></div>
								<p>By Janice Smith</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
-->
	<!-- Review section end -->


	<!-- Gallery section -->
	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="img/instagram/1.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/2.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/3.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/4.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/5.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/6.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
          <!--  <div class="col-lg-6">
					<div class="footer-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Receipies</a></li>
						<li><a href="#">Reviews</a></li>
						<li><a href="#">Contact</a></li>
                    </ul>
-->  
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>