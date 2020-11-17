{{-- <style>
    .modalbox.success,
    .modalbox.error {
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background: #fff;
    padding: 25px 25px 15px;
    text-align: center;
    }
    .modalbox.success.animate .icon,
    .modalbox.error.animate .icon {
    -webkit-animation: fall-in 0.75s;
    -moz-animation: fall-in 0.75s;
    -o-animation: fall-in 0.75s;
    animation: fall-in 0.75s;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    }
    .modalbox.success h1,
    .modalbox.error h1 {
    font-family: 'Montserrat', sans-serif;
    }
    .modalbox.success p,
    .modalbox.error p {
    font-family: 'Open Sans', sans-serif;
    }
    .modalbox.success button,
    .modalbox.error button,
    .modalbox.success button:active,
    .modalbox.error button:active,
    .modalbox.success button:focus,
    .modalbox.error button:focus {
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    margin-top: 15px;
    width: 80%;
    background: transparent;
    color: #4caf50;
    border-color: #4caf50;
    outline: none;
    }
    .modalbox.success button:hover,
    .modalbox.error button:hover,
    .modalbox.success button:active:hover,
    .modalbox.error button:active:hover,
    .modalbox.success button:focus:hover,
    .modalbox.error button:focus:hover {
    color: #fff;
    background: #4caf50;
    border-color: transparent;
    }
    .modalbox.success .icon,
    .modalbox.error .icon {
    position: relative;
    margin: 0 auto;
    margin-top: -75px;
    background: #4caf50;
    height: 100px;
    width: 100px;
    border-radius: 50%;
    }
    .modalbox.success .icon span,
    .modalbox.error .icon span {
    postion: absolute;
    font-size: 4em;
    color: #fff;
    text-align: center;
    padding-top: 20px;
    }
    .modalbox.error button,
    .modalbox.error button:active,
    .modalbox.error button:focus {
    color: #f44336;
    border-color: #f44336;
    }
    .modalbox.error button:hover,
    .modalbox.error button:active:hover,
    .modalbox.error button:focus:hover {
    color: #fff;
    background: #f44336;
    }
    .modalbox.error .icon {
    background: #f44336;
    }
    .modalbox.error .icon span {
    padding-top: 25px;
    }
    .center {
    float: none;
    margin-left: auto;
    margin-right: auto;
    /* stupid browser compat. smh */
    }
    .center .change {
    clearn: both;
    display: block;
    font-size: 10px;
    color: #ccc;
    margin-top: 10px;
    }
    @-webkit-keyframes fall-in {
    0% {
        -ms-transform: scale(3, 3);
        -webkit-transform: scale(3, 3);
        transform: scale(3, 3);
        opacity: 0;
    }
    50% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        opacity: 1;
    }
    60% {
        -ms-transform: scale(1.1, 1.1);
        -webkit-transform: scale(1.1, 1.1);
        transform: scale(1.1, 1.1);
    }
    100% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    }
    @-moz-keyframes fall-in {
    0% {
        -ms-transform: scale(3, 3);
        -webkit-transform: scale(3, 3);
        transform: scale(3, 3);
        opacity: 0;
    }
    50% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        opacity: 1;
    }
    60% {
        -ms-transform: scale(1.1, 1.1);
        -webkit-transform: scale(1.1, 1.1);
        transform: scale(1.1, 1.1);
    }
    100% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    }
    @-o-keyframes fall-in {
    0% {
        -ms-transform: scale(3, 3);
        -webkit-transform: scale(3, 3);
        transform: scale(3, 3);
        opacity: 0;
    }
    50% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        opacity: 1;
    }
    60% {
        -ms-transform: scale(1.1, 1.1);
        -webkit-transform: scale(1.1, 1.1);
        transform: scale(1.1, 1.1);
    }
    100% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    }
    @-webkit-keyframes plunge {
    0% {
        margin-top: -100%;
    }
    100% {
        margin-top: 25%;
    }
    }
    @-moz-keyframes plunge {
    0% {
        margin-top: -100%;
    }
    100% {
        margin-top: 25%;
    }
    }
    @-o-keyframes plunge {
    0% {
        margin-top: -100%;
    }
    100% {
        margin-top: 25%;
    }
    }
    @-moz-keyframes fall-in {
    0% {
        -ms-transform: scale(3, 3);
        -webkit-transform: scale(3, 3);
        transform: scale(3, 3);
        opacity: 0;
    }
    50% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        opacity: 1;
    }
    60% {
        -ms-transform: scale(1.1, 1.1);
        -webkit-transform: scale(1.1, 1.1);
        transform: scale(1.1, 1.1);
    }
    100% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    }
    @-webkit-keyframes fall-in {
    0% {
        -ms-transform: scale(3, 3);
        -webkit-transform: scale(3, 3);
        transform: scale(3, 3);
        opacity: 0;
    }
    50% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        opacity: 1;
    }
    60% {
        -ms-transform: scale(1.1, 1.1);
        -webkit-transform: scale(1.1, 1.1);
        transform: scale(1.1, 1.1);
    }
    100% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    }
    @-o-keyframes fall-in {
    0% {
        -ms-transform: scale(3, 3);
        -webkit-transform: scale(3, 3);
        transform: scale(3, 3);
        opacity: 0;
    }
    50% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        opacity: 1;
    }
    60% {
        -ms-transform: scale(1.1, 1.1);
        -webkit-transform: scale(1.1, 1.1);
        transform: scale(1.1, 1.1);
    }
    100% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    }
    @keyframes fall-in {
    0% {
        -ms-transform: scale(3, 3);
        -webkit-transform: scale(3, 3);
        transform: scale(3, 3);
        opacity: 0;
    }
    50% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        opacity: 1;
    }
    60% {
        -ms-transform: scale(1.1, 1.1);
        -webkit-transform: scale(1.1, 1.1);
        transform: scale(1.1, 1.1);
    }
    100% {
        -ms-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
    }
    }
    @-moz-keyframes plunge {
    0% {
        margin-top: -100%;
    }
    100% {
        margin-top: 15%;
    }
    }
    @-webkit-keyframes plunge {
    0% {
        margin-top: -100%;
    }
    100% {
        margin-top: 15%;
    }
    }
    @-o-keyframes plunge {
    0% {
        margin-top: -100%;
    }
    100% {
        margin-top: 15%;
    }
    }
    @keyframes plunge {
    0% {
        margin-top: -100%;
    }
    100% {
        margin-top: 15%;
    }
    }
</style>

<div class="content-body">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="modalbox error col-sm-8 col-md-6 col-lg-5 center animate">
                    <div class="icon">
                        <span class="lni lni-close"></span>
                    </div>
                    <!--/.icon-->
                    <br><br>
                    <h1>PERINGATAN!</h1>
                    <p>Anda Tidak Mempunyai Akses</p>
                    <a href="{{ route('dashboard') }}"><button type="button" class="redo btn">OK</button></a>
                    <span class="change">-- Silahkan Login Untuk Bisa Memakai Fitur Ini --</span>
                </div>
                <!--/.success-->
            </div>
        </div>
    </div>
</div> --}}

@extends('layouts.dashboard.template')
@section('content')
<div class="authincation h-100" style="padding-top: 235px; padding-left: 280px;">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-5">
                <div class="form-input-content text-center error-page">
                    <h1 class="error-text  font-weight-bold">403</h1>
                    <h4><i class="fa fa-times-circle text-danger"></i> Forbidden Error!</h4>
                    <p>You do not have permission to view this resource.</p>
                    {{-- <div>
                        <a class="btn btn-primary" href="./index.html">Back to Home</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
