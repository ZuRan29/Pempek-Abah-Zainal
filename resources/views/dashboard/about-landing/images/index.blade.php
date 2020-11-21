@extends('layouts.dashboard.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Daftar Foto Pada Landing!</h4>
                    <span>Card</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Daftar Foto Landing Pages</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-3 shadow shadow-dark">
                    <img class="card-img-top img-fluid" src="{{ asset('dashboard/images/card/1.png') }}" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">Judul Coba</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text text-dark">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
