<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cloudseller</title>

	<!--Bootstrap-->
	<link rel="stylesheet" href="{{ asset('public/front/css/bootstrap.min.css') }}" type="text/css">
	<!--FontAwesome-->
	<link rel="stylesheet" href="{{ asset('public/front/css/font-awesome.min.css') }}" type="text/css">
	<!--Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<!--Owl Carousel-->
	<link rel="stylesheet" href="{{ asset('public/front/owl-carousel/owl.carousel.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('public/front/owl-carousel/owl.theme.css') }}" type="text/css">
	<!--<link rel="stylesheet" href="assets/owl-carousel/owl.transitions.css" type="text/css">-->
	<!--Main Style-->
	<link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}" type="text/css">

	<!--Responsive Style-->
	<link rel="stylesheet" href="{{ asset('public/front/css/responsive.css') }}" type="text/css">
	<style>
		[data-sr] {
			visibility: hidden;
		}
	</style>
</head>
<body>

<!--/HEADER SECTION -->
<header class="hider affix">
	<div class="container">
		<div class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand home-title" href="{{url('/')}}"><img src="{{ asset('public/front/images/logo.png') }}" alt=""></a>
				</div><!-- end navbar-header -->

			</div><!--/.container-fluid -->
		</div>
	</div><!-- end container -->
</header><!-- end header -->

<section id="latest-works" style="margin-top: 50px">
	<div class="container">

	@if($stores == "[]")
	<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="section-title">Sorry, we are currently not have any store in {!! $kota->name.', '.$kota->provinsi->name !!}</h1>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="section-title">All store in {!! $kota->name.', '.$kota->provinsi->name !!}</h1>
			</div>
		</div>
		<div class="row text-center">

		<!-- 
			<div class="works-category"  data-sr='enter top, wait 0.2s'>
				<ul class=" list-inline">
					<li><a href="#" data-filter="*" class="current">All</a></li>
					<li><a href="#" data-filter=".branding">Branding</a></li>
					<li><a href="#" data-filter=".design">Design</a></li>
					<li><a href="#" data-filter=".development">Development</a></li>
					<li><a href="#" data-filter=".strategy">Strategy</a></li>
				</ul>
			</div>
		-->
			<div class="works-area" >

			@foreach($stores as $store)
				<div class="col-md-4 col-sm-6 col-xs-12  branding"  >
					<div class="works">
						<img src="{{asset('public/front/images/store').'/'.$store->image}}" alt="">

						<div class="work-overlay text-center">
							<div class="overlay-caption">
								<h4>{!!$store->store_name!!}</h4>
							</div>
							<div class="overlay-caption" style="margin: 5px">
								<p>{!!$store->short_desc!!}</p>
							</div>
							<div class="overlay-caption">
								<a class="btn-view" href="{!! url('toko/'.$store->slug) !!}">VIEW STORE<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			@endforeach


			</div> 
		</div>

	@endif
	</div>
</section>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center" data-sr='enter bottom, wait 0.32s'>
				<div class="social">
					<ul class="list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>

				<p>&copy; 2015 Startup, Designed by <a href="https://shapedtheme.com">ShapedTheme</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- / Footer-->


<script src="{{ asset('public/front/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>
<!--Owl Carousel-->
<script type="text/javascript" src="{{ asset('public/front/owl-carousel/owl.carousel.min.js') }}"></script>
<!--Parallax-->
<script type="text/javascript" src="{{ asset('public/front/js/jquery.stellar.min.js') }}"></script>
<!--IsoTop-->
<script type="text/javascript" src="{{ asset('public/front/js/isotope.pkgd.min.js') }}"></script>
<!--Typed js-->
<script type="text/javascript" src="{{ asset('public/front/js/typed.js') }}"></script>
<!--Smooth Scroll-->
<script type="text/javascript" src="{{ asset('public/front/js/smooth-scroll.js') }}"></script>
<!--Reveal JS-->
<script type="text/javascript" src="{{ asset('public/front/js/scrollReveal.min.js') }}"></script>

<!--Main-->
<script type="text/javascript" src="{{ asset('public/front/js/main.js') }}"></script>


</body>
</html>