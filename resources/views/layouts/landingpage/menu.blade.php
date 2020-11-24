@extends('layouts.landingpage.template')

@section('menu')
<section class="rs_sixth_section" id="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 text-center">
				<h1 class="rs_main_heading temp6_bottompadder30 wow animated fadeInUp" data-wow-delay="1000ms">Daftar Menu</h1>
				{{-- <p class="wow animated fadeInUp" data-wow-delay="1000ms">hJ </p> --}}
            </div>
            @foreach ($menus as $menu)
			<div class="col-lg-6 col-md-6 temp6_toppadder70">
				<div class="rs_menu_desc wow animated fadeInLeft" data-wow-delay="1000ms">
					<div class="col-sm-3">
						<img src="{{asset('images/menu/'.$menu->nama_menu)}}/{{$menu->foto}}" alt="" style="width: 250px; height: 100px; padding-right: -50px;" class="img-responsive" />
					</div>
					<div class="col-sm-9">
						<div class="rs_menu_text">
							<span class="rs_menu_heading">{{ $menu->nama_menu }}</span>
							<span class="rs_menu_price">{{ 'Rp. ' . number_format($menu->harga,0,"." , ",") }}</span>
						</div>
						<p>{{ $menu->deskripsi }}</p>
					</div>
				</div>
            </div>
            @endforeach
		</div>
	</div>
</section>
@endsection
