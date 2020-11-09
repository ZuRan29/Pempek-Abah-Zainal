@extends('layouts.dashboard.template')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Daftar Menu!</h4>
                    <span>Card</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Daftar Menu</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">List Menu</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            @foreach ($menus as $menu)
            <div class="col-xl-6">
                <div class="card mb-3">
                    <div class="bootstrap-carousel">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('images/menu/'. $menu->nama_menu) }}/{{$menu->foto}}" alt="First slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h5 class="card-title">{{$menu->nama_menu}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$menu->deskripsi}}
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Harga</p>
                        <a href="javascript:void()" class="card-link float-right">{{"Rp. ". number_format($menu->harga,0,',','.')}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
