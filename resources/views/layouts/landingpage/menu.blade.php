@extends('layouts.landingpage.template')

@section('menu')
<section class="rs_sixth_section" id="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 text-center">
				<h1 class="rs_main_heading temp6_bottompadder30 wow animated fadeInUp" data-wow-delay="1000ms">Daftar Menu</h1>
				{{-- <p class="wow animated fadeInUp" data-wow-delay="1000ms">hJ </p> --}}
			</div>
			<div class="col-lg-6 col-md-6 temp6_toppadder70">
				<div class="rs_menu_desc wow animated fadeInLeft" data-wow-delay="1000ms">
					<div class="col-sm-3">
						<img src="{{asset('assets/images/menu_img1.jpg')}} " alt="" class="img-responsive"/>
					</div>
					<div class="col-sm-9">
						<div class="rs_menu_text">
							<span class="rs_menu_heading">Seafood Spaghetti</span>
							<span class="rs_menu_price">$35.00</span>
						</div>
						<p>It is a long established fact that a that reader able content many desktop publishing </p>
					</div>
				</div>
				<div class="rs_menu_desc wow animated fadeInLeft" data-wow-delay="1000ms">
					<div class="col-sm-3">
						<img src="{{asset('assets/images/menu_img3.jpg')}} " alt="" class="img-responsive"/>
					</div>
					<div class="col-sm-9">
						<div class="rs_menu_text">
							<span class="rs_menu_heading">Lobster Mac & Cheese</span>
							<span class="rs_menu_price">$50.00</span>
						</div>
						<p>It is a long established fact that a that reader able content many desktop publishing </p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 temp6_toppadder70">
				<div class="rs_menu_desc wow animated fadeInRight" data-wow-delay="1000ms">
					<div class="col-sm-3">
						<img src="{{asset('assets/images/menu_img2.jpg')}} " alt="" class="img-responsive"/>
					</div>
					<div class="col-sm-9">
						<div class="rs_menu_text">
							<span class="rs_menu_heading">Kung Pao Pastrami</span>
							<span class="rs_menu_price">$48.00</span>
						</div>
						<p>It is a long established fact that a that reader able content many desktop publishing </p>
					</div>
				</div>
				<div class="rs_menu_desc wow animated fadeInRight" data-wow-delay="1000ms">
					<div class="col-sm-3">
						<img src="{{asset('assets/images/menu_img4.jpg')}} " alt="" class="img-responsive"/>
					</div>
					<div class="col-sm-9">
						<div class="rs_menu_text">
							<span class="rs_menu_heading">Salt And Pepper Squid</span>
							<span class="rs_menu_price">$70.00</span>
						</div>
						<p>It is a long established fact that a that reader able content many desktop publishing </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
