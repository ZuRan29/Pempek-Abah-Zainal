<html lang="en">
<head>
	<meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Truelander provides the list of fresh & healthy food recipes which can pick it with one click. You can also book our food through online">
    <meta name="keywords" content="Online food order, Healthy breakfast food, List of Lunch recipes, Best dinner recipes, Food online delivery, Fresh online food">
    <meta name="author" content="Truelander provides the list of fresh & healthy food recipes which can pick it with one click. You can also book our food through online">
    <meta name="MobileOptimized" content="320">
    {{-- <!--start theme style -->{{ asset('assets/') }} --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}"/>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/js/plugins/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="preloader"> <img src="{{ asset('assets/images/loader.gif') }}" alt="pre loader" class="img-responsive"> </div>
<!-- header_start -->
	<section class="rs_top_banner" id="home">
		<div class="rs_top_banner_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
					<a href="#" class="rs_logo"><img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-responsive"/></a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-5 pull-right">
					<button class="cr_menu_btn">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
                    <div class="tl_header_right">
                    	<div class="tl_menu">
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#menu">Tentang</a></li>
                                <li><a href="#features">Menu</a></li>
                                <li><a href="#download">Pesan Sekarang</a></li>
                            </ul>
                        </div>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
					<div class="rs_banner_text text-center">
						<h1 class="wow animated fadeInUp" data-wow-delay="1000ms">Pempek Palembang Abah Zainal</h1>
						<p class="temp6_topspacer30 wow animated fadeInUp" data-wow-delay="1000ms">
                            Pempek Asli Palembang Dibuat Dengan Ikan Asli Tenggiri dan Dari Bahan Yang 100% Halal, dan Dengan Harga Yang Pasti Pas Di Kantong
						</p>
						<a href="#" onclick="window.open('https://api.whatsapp.com/send/?phone=6288788103990&text&app_absent=0')" class="rs_yellow_btn temp6_topspacer40 wow animated fadeInUp" data-wow-delay="1000ms">Hubungi Kami</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- header_end -->

<!-- second_section_start -->
<section class="rs_second_section" id="menu">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 text-center">
				<h1 class="rs_main_heading wow animated fadeInUp" data-wow-delay="1000ms">Taste the Delicious</h1>
				<p class="temp6_toppadder30 temp6_bottompadder80 wow animated fadeInUp" data-wow-delay="1000ms">Proin eget tortor risus cras ultricies ligula sed magna dictum porta sed porttitor lectus nibh vamus suscipit tortor eget felis porttitor volutpat.</p>
				</div>
			<div class="clearfix"></div>
			<div class="col-lg-4 col-md-4 col-sm-4 rs_taste_section wow animated fadeInUp" data-wow-delay="1000ms">
				<div class="col-lg-3 col-md-3">
					<img src="{{ asset('assets/images/breakfast.svg') }}" alt="" class="img-responsive"/>
				</div>
				<div class="col-lg-9 col-md-9">
					<h2>Breakfast</h2>
					<p class="temp6_bottompadder20">It is a long established fact that a that reader will be discon by the readable content.</p>
					<a href="" class="rs_bordered_btn">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 rs_taste_section wow animated fadeInUp" data-wow-delay="1000ms">
				<div class="col-lg-3 col-md-3">
					<img src="{{ asset('assets/images/lunch.svg') }}" alt="" class="img-responsive"/>
				</div>
				<div class="col-lg-9 col-md-9">
					<h2>Lunch</h2>
					<p class="temp6_bottompadder20">It is a long established fact that a that reader will be discon by the readable content.</p>
					<a href="" class="rs_bordered_btn">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 rs_taste_section wow animated fadeInUp" data-wow-delay="1000ms">
				<div class="col-lg-3 col-md-3">
					<img src="{{ asset('assets/images/dinner.svg') }}" alt="" class="img-responsive"/>
				</div>
				<div class="col-lg-9 col-md-9">
					<h2>Dinner</h2>
					<p class="temp6_bottompadder20">It is a long established fact that a that reader will be discon by the readable content.</p>
					<a href="" class="rs_bordered_btn">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- second_section_end -->

<!-- third_section_start -->
<section class="rs_third_section">
	<div class="rs_third_section_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="rs_testimonials temp6_right_padder45">
				<div class="rs_full_box">
					<span class="rs_rating_section">
						<fieldset class="rating">
							<input type="radio" id="star10" name="rating" value="5" /><label class = "full" for="star10" title="Awesome - 5 stars"></label>
							<input type="radio" id="star4half1" name="rating" value="4 and a half" checked/><label class="half" for="star4half1" title="Pretty good - 4.5 stars"></label>
							<input type="radio" id="star9" name="rating" value="4" /><label class = "full" for="star9" title="Pretty good - 4 stars"></label>
							<input type="radio" id="star3half1" name="rating" value="3 and a half" checked/><label class="half" for="star3half1" title="Meh - 3.5 stars"></label>
							<input type="radio" id="star8" name="rating" value="3" /><label class = "full" for="star8" title="Meh - 3 stars"></label>
							<input type="radio" id="star2half1" name="rating" value="2 and a half" /><label class="half" for="star2half1" title="Kinda bad - 2.5 stars"></label>
							<input type="radio" id="star7" name="rating" value="2" /><label class = "full" for="star7" title="Kinda bad - 2 stars"></label>
							<input type="radio" id="star1half1" name="rating" value="1 and a half" /><label class="half" for="star1half1" title="Meh - 1.5 stars"></label>
							<input type="radio" id="star6" name="rating" value="1" /><label class = "full" for="star6" title="Sucks big time - 1 star"></label>
							<input type="radio" id="starhalf1" name="rating" value="half" /><label class="half" for="starhalf1" title="Sucks big time - 0.5 stars"></label>
						</fieldset>
					</span>
					<span class="rs_date">06, Sep</span>
				</div>
				<div class="clearfix"></div>
				<p>Proin eget tortor risus cras ultricies ligula sed magna dictum porta sed porttitor lectus nibh vamus suscipit tortor eget felis porttitor volutpat.</p>
				<div class="rs_author_section">
					<span class="auth_name">Mitchell Bech</span>
					<span class="auth_avtar"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
				</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="rs_testimonials temp6_left_padder45">
				<div class="rs_full_box">
					<span class="rs_rating_section">
						<fieldset class="rating1">
							<input type="radio" id="star5" name="rating1" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							<input type="radio" id="star4half" name="rating1" value="4 and a half" checked/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							<input type="radio" id="star4" name="rating1" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							<input type="radio" id="star3half" name="rating1" value="3 and a half" checked/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							<input type="radio" id="star3" name="rating1" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							<input type="radio" id="star2half" name="rating1" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							<input type="radio" id="star2" name="rating1" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							<input type="radio" id="star1half" name="rating1" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							<input type="radio" id="star1" name="rating1" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							<input type="radio" id="starhalf" name="rating1" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
						</fieldset>
					</span>
					<span class="rs_date">06, Sep</span>
				</div>
				<div class="clearfix"></div>
				<p>Proin eget tortor risus cras ultricies ligula sed magna dictum porta sed porttitor lectus nibh vamus suscipit tortor eget felis porttitor volutpat.</p>
				<div class="rs_author_section">
					<span class="auth_name">Mitchell Bech</span>
					<span class="auth_avtar"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- third_section_end -->

<!-- fourth_section_start -->
<section class="rs_fourth_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 temp6_bottompadder50">
				<div class="rs_flavour_section text-right wow animated fadeInLeft" data-wow-duration="1500ms" data-wow-delay="400ms">
					<h1 class="rs_main_heading">Taste the Delicious</h1>
					<p>It is a long established fact that a that reader will be discon by the readable content many desktop publishing packages and web page editors now use lorem Ipsum as their default model text and a search for lorem ipsum will uncover many web sites still in their infancy.</p>
					<a href="#" class="rs_yellow_btn">Order Now</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-9 col-xs-9 temp6_bottompadder50">
				<div class="rs_flavoured_img">
					<div class="rs_left_images">
						<img src="{{ asset('assets/images/dish_img1.jpg') }}" alt="" class="img-responsive"/>
						<img src="{{ asset('assets/images/dish_img2.jpg') }}" alt="" class="img-responsive"/>
					</div>
					<div class="rs_left_images">
						<img src="{{ asset('assets/images/dish_img3.jpg') }}" alt="" class="img-responsive"/>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-push-6 col-md-push-6 temp6_bottompadder50">
				<div class="rs_flavour_section text-left wow animated fadeInRight" data-wow-duration="1500ms" data-wow-delay="400ms">
					<h1 class="rs_main_heading">Available at Online</h1>
					<p>It is a long established fact that a that reader will be discon by the readable content many desktop publishing packages and web page editors now use lorem Ipsum as their default model text and a search for lorem ipsum will uncover many web sites still in their infancy.</p>
					<a href="#" class="rs_yellow_btn">Order Now</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-9 col-xs-9 col-lg-pull-6 col-md-pull-6">
				<div class="rs_flavoured_img">
					<div class="rs_left_images">
						<img src="{{ asset('assets/images/dish_img4.jpg') }}" alt="" class="img-responsive"/>
					</div>
					<div class="rs_left_images">
						<img src="{{ asset('assets/images/dish_img5.jpg') }}" alt="" class="img-responsive"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fourth_section_end -->

<!-- sixth_section_start -->
@yield('menu')
<!-- sixth_section_end -->

<!-- fifth_section_start -->
<section class="rs_fifth_section" id="download">
	<div class="rs_fifth_section_overlay"></div>
	<div class="container">
		<div class="row">
			<h2>Pesan Sekarang</h2>
			<form class="form-inline" role="form">
				<div class="form-group col-sm-3">
					<div class="input-group"> <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input type="text" class="form-control" placeholder="Nama Lengkap">
					</div>
                </div>
                <div class="form-group col-sm-3">
					<div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
						<input type="text" class="form-control" placeholder="Pilih Tanggal" id="datetimepicker1">
					</div>
				</div>
				<div class="form-group col-sm-3">
					<div class="input-group"> <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
						<input type="text" class="form-control" placeholder="Pilih Jam" id="datetimepicker3">
					</div>
				</div>
				<div class="form-group col-sm-3">
					<div class="input-group"> <span class="input-group-addon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
						<input type="text" class="form-control" placeholder="No. Of Person">
					</div>
				</div>
				<div class="form-group col-sm-12 text-center">
					<button type="submit" class="btn btn-default">Book Now</button>
				</div>
            </form>
		</div>
	</div>
</section>
<!-- fifth_section_end -->

<!-- seventh_section_start -->
{{-- <section class="rs_seventh_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="rs_clients">
					<h2>Our Trusted Clients</h2>
					<p>Proin eget tortor risus cras ultricies ligula sed portavamus suscipit tortor</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-8">
				<ul class="rs_user_list">
					<li><a href=""><img src="{{ asset('assets/images/client1.svg') }}" alt="" class="img-responsive"></a></li>
					<li><a href=""><img src="{{ asset('assets/images/client2.svg') }}" alt="" class="img-responsive"></a></li>
					<li><a href=""><img src="{{ asset('assets/images/client3.svg') }}" alt="" class="img-responsive"></a></li>
				</ul>
			</div>
		</div>
	</div>
</section> --}}
<!-- seventh_section_end -->
<!-- footer_start -->
<section class="rs_footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<a href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-responsive"/></a>
				<ul class="rs_social_icons">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-3 col-lg-push-6 col-md-push-6">
				<div class="rs_last_footer">
					<h2>Make Reservation</h2>
					<p>Mon - Fri: 8.00am to 10.30pm</p>
					<p>Sat - Sun: 7.00am to 10.00pm</p>
					<a href="#" class="rs_yellow_btn temp6_top_spacer20">Make Reservation</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-lg-pull-3 col-md-pull-3">
				<div class="rs_footer_center">
					<p>It is a long established fact that a that reader will be discon by the read able content many desktop publishing packages and web page editors now use lorem Ipsum infancy.</p>
					<p class="rs_copyright">2016 &copy; Copyrights - <a href="#">Truelander</a> - All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div><a href="#" class="btn-primary back-to-top show mt-2" title="Move to top"><i class="pe-7s-angle-up pe-2x"></i></a>
</section>
<!-- footer_end -->
<!--js start-->
	<script src="{{ asset('assets/js/jquery-1.12.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/plugins/datetimepicker/moment.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
<!--js end-->
</body>
</html>
