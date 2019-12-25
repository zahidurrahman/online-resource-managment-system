<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from demosly.com/xicia/ebook/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2019 14:39:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

	<!-- Showing the SEO related meta tags data -->
	<meta name="description" content="ebook is a nice and clean responsive ebook collection CMS"><meta name="keywords" content="book, ebook, online ebook, ebook author, writer, author, ebook writer, online writer, online author"><title>EBook - Online ebook download and management CMS</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/uploads/favicon.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="assets/css/superfish.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/jquery.bxslider.css">
	<link rel="stylesheet" href="assets/css/hover.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">


	<script type="text/javascript" src="../../../platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>

</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="preloader">
		<div id="status"></div>
	</div>

	<div class="page-wrapper">

		<!-- Header Start -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 logo">
						<a href="/"><img src="assets/uploads/logo.png" alt=""></a>
					</div>
					<div class="col-md-9 col-sm-9 nav-wrapper">

						<!-- Nav Start -->
						<nav>
							<ul class="sf-menu" id="menu">
								<li>
									<a href="/index">Home</a>
								</li>
								@if (Route::has('login'))

												@auth
												<li>
														<a href="/ug">UnderGraduate</a>
												</li>
												<li>
													<a href="/pg">PostGraduate</a>
												</li>
												<li>
													<a href="/ot">Others</a>
												</li>

												@endauth
								@endif

									<li>
										<a href="/about">About Us</a>
									</li>
									<li>
										<a href="/contact">Contact Us</a>
									</li>
									@if (Route::has('login'))

													@auth

													<li>
														<a href="/profile">Profile</a>
													</li>
													<li>
															<a href="{{ route('logout') }}"  onclick="event.preventDefault();
																						 document.getElementById('logout-form').submit();">
																	 Log out
															</a>
															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																 @csrf
															</form>
													</li>
													@else
														<li>
															<a href="{{ route('login') }}">Login</a>
														</li>
															@if (Route::has('register'))
															<li>
																	<a href="{{ route('register') }}">Register</a>
															</li>
															@endif
													@endauth
									@endif
							</ul>
						</nav>
						<!-- Nav End -->

					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->
