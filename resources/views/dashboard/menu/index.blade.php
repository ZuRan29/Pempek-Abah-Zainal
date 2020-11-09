@extends('layouts.dashboard.template')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Card</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Card</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-3">
                    <div class="bootstrap-carousel">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('dashboard/images/big/img3.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('dashboard/images/big/img4.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('dashboard/images/big/img5.jpg')}}" alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">He lay on his armour-like back, and if he lifted his head a little
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Card footer</p>
                        <a href="javascript:void()" class="card-link float-right">Card link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@if (session('success'))
<script>
    toastr.success('{{ session("success") }}');
</script>
@endif
@endsection
