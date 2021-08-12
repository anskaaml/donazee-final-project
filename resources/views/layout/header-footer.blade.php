<!DOCTYPE html>
<html lang="zxx">
<link rel="icon" type="image/png" href="{{ asset('images/logo-app.png') }}">
<head>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<title>@yield('title')</title>
	<!--//tags -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
	<!--pop-up-box-->
	<link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>

	<!-- header-bot-->
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
					<a href="{{ route('home') }}">
						<img src="{{ asset('images/logo.png') }}" width="150" height="50" alt="logo">
					</a>
			</div>
		</div>
		</div>
	</div>

	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="{{ route('home') }}">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li>
									<a class="nav-stylehead" href="about.html">Tentang Kami</a>
								</li>
								<li>
									<a href="{{ route('fundraise-create') }}" role="button" aria-haspopup="true" aria-expanded="false">Galang Dana</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li>
								@if(Route::has('login'))
									@auth
									<a class="nav-stylehead" href="{{ url('/dashboard') }}">Profile</a>
										@else
										<a class="nav-stylehead" href="{{ route('login') }}">Login</a>
								</li>
								<li>
										@if(Route::has('register'))
										<a class="nav-stylehead" href="{{ route('register') }}">Register</a>
										@endif
									@endauth
								@endif
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->

    @yield('content')
	
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Kategori</h3>
						<ul>
							<li>
								<a href="">Pendidikan</a>
							</li>
							<li>
								<a href="">Lingkungan</a>
							</li>
							<li>
								<a href="">Kegiatan Sosial</a>
							</li>
							<li>
								<a href="">Bencana Alam</a>
							</li>
							<li>
								<a href="">Balita dan Anak Sakit</a>
							</li>
							<li>
								<a href="">Medis dan Kesehatan</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="">Peduli Hewan</a>
							</li>
							<li>
								<a href="">Rumah Ibadah</a>
							</li>
							<li>
								<a href="">Difabel</a>
							</li>
							<li>
								<a href="">Zakat</a>
							</li>
							<li>
								<a href="">Panti Asuhan</a>
							</li>
							<li>
								<a href="">Kemanusiaan</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Informasi</h3>
						<ul>
							<li>
								<a href="about.html">Tentang Kami</a>
							</li>
							<li>
								<a href="help.html">Bantuan</a>
							</li>
							<li>
								<a href="faqs.html">Faqs</a>
							</li>
							<li>
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Kontak</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> Surabaya, Indonesia</li>
							<li>
								<i class="fa fa-mobile"></i> +627463694235</li>
							<li>
								<i class="fa fa-phone"></i> +593 2134 2564</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="donazee@gmail.com"> donazee@gmail.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Kami</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
		
			
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- //footer -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- flexisel -->
	<script src="{{ asset('js/jquery.flexisel.js') }}"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>

	<!-- progress bar -->
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>

	<!-- smoothscroll -->
	<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{{ asset('js/move-top.js') }}"></script>
	<script src="{{ asset('js/easing.js') }}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</body>

</html>