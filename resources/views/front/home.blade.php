<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cloudshopping - The simplest way to shopping</title>

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
		.btn-default {
			background-color: white;
			border: 0;
		}
		.form-control[disabled] {
	background-color: #fff;
	border-color: #ccc;
}
	</style>
</head>
<body>

<!--/HEADER SECTION -->
<header class="header">
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

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{url('user/login')}}" >Login</a></li>
						<li><a href="{{url('user/register')}}" >Register</a></li>

					</ul>
				</div><!--/.nav-collapse -->

			</div><!--/.container-fluid -->
		</div>
	</div><!-- end container -->
</header><!-- end header -->

<!--/SLIDER SECTION -->
<section id="home" class="sliderwrapper clearfix">

	<div class="home-overlay"></div>

	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<div class="block" >
					<h1 class="home-title wow fadeInDown">Welcome to CloudShopping</h1>

					<p class="title-small wow fadeInDown" data-wow-delay="0.3s">The simplest way to shopping</p>

					<div class="form-cari-seller">
					<div class="wow fadeInDown" data-wow-delay="0.3s">
					{!! Form::open(['method' => 'post', 'url' => 'store'])!!}
						<div class="form-group">
							<div class="col-md-4">
							{!! Form::select('provinsi', $provinsi, null, ['class' => 'form-control', 'placeholder' => 'PILIH PROVINSI', 'id' => 'provinsi']) !!}
							</div>


							<div class="col-md-4" id="kota">
							{!! Form::select('kota', [], null, ['class' => 'form-control', 'placeholder' => 'PILIH KOTA', 'disabled']) !!}
							</div>


							<div class="col-md-4">
								<button name="btnFindSeller" id="btnFindSeller" class="form-control btn btn-default" disabled>Find store</button>
							</div>
					{!! Form::close() !!}

						</div>
					</div>
					</div>

				</div>
			</div>
			<!-- .row close -->
		</div>
	</div>

</section><!-- end Home -->

<section id="services">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-12 ">
				<h2 class="section-title"> Services</h2>

				<p class="sec-subtitle">Apapun yang anda butuhkan ada disini</p>
			</div>
			<div class="col-sm-4"  data-sr="enter left, hustle 20px">
				<div class="service">
					<i class="fa fa-font service-icon"></i>

					<h5 class="title">Respon cepat</h5>

					<p>Orderan anda akan langsung diproses oleh para seller dan diantar langsung ke billing address anda</p>
				</div>
			</div>
			<div class="col-sm-4"  data-sr="enter top, hustle 20px">
				<div class="service">
					<i class="fa fa-code service-icon"></i>

					<h5 class="title">Proses mudah</h5>

					<p>Carilah penjual sate, bubur, martabak, dan lain sebagainya tanpa perlu bergerak dari lokasi anda saat ini</p>
				</div>
			</div>
			<div class="col-sm-4"  data-sr="enter right, hustle 20px">
				<div class="service">
					<i class="fa fa-support service-icon"></i>

					<h5 class="title">get discount</h5>

					<p>Anda akan mendapatkan discount dari seller jika sudah lebih dari 10x melakukan order</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="get-in-touch" data-stellar-background-ratio="0.7">
	<div class="action-overlay"></div>
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-12"   data-sr="enter top, hustle 60px">
				<h1 class="action-title">Build a great store and sell your product as fast as you can<br></h1>
				<a href="{{url('owner/register')}}" class="btn btn-action">Register</a>
				<a href="{{url('owner/login')}}" style="margin-left: 20px;padding-left: 45px;padding-right: 45px" class="btn btn-action">Login</a>
				
			</div>
		</div>
	</div>
</section>
<section id="about-us">
	<div class="container">
		<div class="row ">
			<div class="col-sm-12 text-center">
				<h2 class="section-title">About us</h2>

				<p class="sec-subtitle">pengenalan sedikit tentang cloudseller</p>
			</div>
			<div class="col-sm-6">
				<p>Cloudseller adalah sebuah tempat dimana seller dan buyer dipertemukan dengan mudah. Disini buyer dapat mengorder sesuatu kepada seller secara online dan seller akan mengantarkan orderan ke tempat dimana buyer berada dalam hitungan menit. Pengiriman orderan tidak dipungut biaya apapun</p>
			</div>
			<div class="col-sm-6">
				<p>Pembayaran dilakukan secara tunai disaat orderan sudah sampai ditempat buyer. Kami staff cloudseller tidak mengambil keuntungan sedikitpun dari hasil transaksi antara buyer dan seller. Uang hasil transaksi murni hanya untuk seller terkait.</p>
			</div>
			<div class="col-sm-12 text-center" >
				<div id="owl-demo">
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
					<div class="item" data-sr="enter left, hustle 60px">
						<div class="team-thumb">
							<img src="{{ asset('public/front/images/team1.png') }}" alt="Owl Image">

							<div class="team-social">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="owl-caption">
							<h5>Md. Khalil Uddin</h5>

							<p>Head of Ideas</p>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>



<!--
<section id="recent-posts">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="section-title">Recent blog posts</h1>

				<p class="sec-subtitle">We offer ipsum dolor sit amet, consetetur sadipscing elitr amet</p>
			</div>
		</div>
		<div class="posts-area"  data-sr="enter left, hustle 60px">
			<div class="row">
				<div class="col-sm-5 post-thumb">
					<img src="assets/images/post-thumb2.png" alt="" class="img-responsive">
				</div>
				<div class="col-sm-7 post-content">
					<div class="post-header clearfix">
						<div class="post-date pull-left">
							<h1>18</h1>

							<p>OCT</p>
						</div>
						<div class="post-title pull-left">
							<h4><a href="#">dolor sit amet, consetetur sadipscing elitr amet</a></h4>

							<p>By <a href="#">Shamim</a> in <a href="#">Development</a></p>
						</div>
					</div>
					<div class="post-body clearfix">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
							inviduntlabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
							et justo duo dolores et erebum. Stet clita kasd gubergren, no sea takimata sanctus est
							Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
							diam nonumy eirmod tempor invidunt ut labore et dolore aliquyam erat, sed diam
							voluptua.sed
							diam nonumy eirmod tempor invidunt ut labore et dolore aliquyam erat, sed diam voluptua.
							At vero eos etamet, et accusam et justo duo </p>

						<p><a href="#">Read More</a></p>
					</div>
				</div>
			</div>
		</div> <!-- / Recent Post-->

		<!--
		<div class="posts-area"  data-sr="enter right, hustle 60px">
			<div class="row">
				<div class="col-sm-5 post-thumb">
					<img src="assets/images/post-thumb.png" alt="" class="img-responsive">
				</div>
				<div class="col-sm-7 post-content">
					<div class="post-header clearfix">
						<div class="post-date pull-left">
							<h1>18</h1>

							<p>OCT</p>
						</div>
						<div class="post-title pull-left">
							<h4><a href="#">dolor sit amet, consetetur sadipscing elitr amet</a></h4>

							<p>By <a href="#">Shuhagh</a> in <a href="#">Design</a></p>
						</div>
					</div>
					<div class="post-body clearfix">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
							inviduntlabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
							et justo duo dolores et erebum. Stet clita kasd gubergren, no sea takimata sanctus est
							Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
							diam nonumy eirmod tempor invidunt ut labore et dolore aliquyam erat, sed diam
							voluptua.sed
							diam nonumy eirmod tempor invidunt ut labore et dolore aliquyam erat, sed diam voluptua.
							At vero eos etamet, et accusam et justo duo </p>

						<p><a href="#">Read More</a></p>
					</div>
				</div>
			</div>
		</div> <!-- / Recent Post-->
		<!--
	</div>
</section>
-->
<!--
<section id="testimonial">
	<div class="container text-center">
		<div class="row ">
			<div class="col-sm-12">
				<ul class="list-inline clients">
					<li data-sr='enter top, wait 0.2s'><img src="assets/images/deorham.png" alt=""></li>
					<li data-sr='enter top, wait 0.2s'><img src="assets/images/mmedia.png" alt=""></li>
					<li data-sr='enter top, wait 0.2s'><img src="assets/images/ratings.png" alt=""></li>
					<li data-sr='enter top, wait 0.2s'><img src="assets/images/wopify.png" alt=""></li>
					<li data-sr='enter top, wait 0.2s'><img src="assets/images/bcause.png" alt=""></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1"  data-sr='enter bottom, wait 0.2s'>
				<div id="owl-testimonial" class="owl-carousel">
					<div class="item">
						<div class="testimonials">
							<p class="testimonial-text">"Hvaing placeat facere possimus, omnis voluptas assumenda
								est,
								omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut
								rerum”</p>

							<p class="testimonial-author">John Doe, Google Inc.</p>
						</div>
					</div>
					<div class="item">
						<div class="testimonials">
							<p class="testimonial-text">"Hvaing placeat facere possimus, omnis voluptas assumenda
								est,
								omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut
								rerum”</p>

							<p class="testimonial-author">Shamim Shuhagh, ShapedTheme.</p>
						</div>
					</div>
					<div class="item">
						<div class="testimonials">
							<p class="testimonial-text">"Hvaing placeat facere possimus, omnis voluptas assumenda
								est,
								omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut
								rerum”</p>

							<p class="testimonial-author">Jacob Brunette, Google Inc.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->
<!-- / Testimonial-->


<!--Contact
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="section-title">Contact</h1>

				<p class="sec-subtitle">We offer ipsum dolor sit amet, consetetur sadipscing elitr amet</p>
			</div>
			<div class="col-sm-4" data-sr="enter left, hustle 80px">
				<div class="address">
					<p class="address-title title"><i class="fa fa-map-marker"></i> Address</p>

					<p class="address-content">312, 7th Ave, New York <br>
						NY 101200, United States of America</p>
				</div>
				<div class="address">
					<p class="address-title title"><i class="fa fa-mobile-phone"></i> Hotline (24x7)</p>

					<p class="address-content">+65 0052 300, +65 88251 210 <br>
						+88 01723 511 340</p>
				</div>
				<div class="address">
					<p class="address-title title"><i class="fa fa-envelope-o"></i> E-mail</p>

					<p class="address-content">shapedtheme@gmail.com <br>hello@shapedtheme.com</p>
				</div>
			</div>
			<div class="col-sm-8" data-sr="enter right, hustle 80px">
				<form class="st-form">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group ">
								<input type="text" class="form-control" placeholder="YOUR NAME">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group ">
								<input type="text" class="form-control" placeholder="YOUR E-MAIL">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group ">
								<input type="text" class="form-control" placeholder="YOUR SUBJECT">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group ">
								<input type="text" class="form-control" placeholder="COMPANY NAME">
							</div>
						</div>
					</div>

					<div class="form-group ">
						<textarea class="form-control" rows="4" placeholder="WRITE YOUR MESSAGE"></textarea>
					</div>
					<button type="submit" class="btn btn-send">Sign in</button>
				</form>
			</div>
		</div>
	</div>
</section>
 Contact-->
<!--Footer-->
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

				<p>&copy; 2015 cloudshopping, Designed by <a href="https://shapedtheme.com">ShapedTheme</a></p>
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

<script>
$(document).ready(function() {

	$('#provinsi').change(function() {
		var provinsi = $("#provinsi").val();
		$("select#provinsi option[value='']").remove();

		if(provinsi == '') {
			$.ajax({
				type: 'POST',
				url :'{{url('getKota')}}',
				data: {provinsi:provinsi, "_token":"{{ csrf_token() }}"},
				success: function(data) {
					$("#kota").html(data);
				}
			});
			document.getElementById("selectkota").setAttribute("disabled", "disabled");
			document.getElementById("btnFindSeller").setAttribute("disabled", "disabled");
		}
		else {
			$('select[name="kota"]').removeAttr('disabled');
			$('button[name="btnFindSeller"]').removeAttr('disabled');
			$.ajax({
				type: 'POST',
				url :'{{url('getKota')}}',
				data: {provinsi:provinsi, "_token":"{{ csrf_token() }}"},
				success: function(data) {
					$("#kota").html(data);
				}
			});
		}
	});
});
</script>
</body>
</html>