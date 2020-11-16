@extends('layouts.dashboard.template')
@section('content')
@if (auth()->user()->can('role-list'))
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, Daftar Role!</h4>
                        <span>Card</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Daftar Role</a></li>
                        {{-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Card</a></li> --}}
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card-header">
                                    <h4 class="card-title">Daftar Role</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                @can('role-create')
                                <a href="{{ route('role.create') }}"><button type="button" style="margin-top:15px;" class="btn btn-info btn-sm">Buat Role Baru <span
                                    class="btn-icon-right"><i style="margin-right:10px" class="fa fa-plus color-info"></i></span>
                                </button></a>
                                @endcan
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th style="width:80px;"><strong>No</strong></th>
                                            <th><strong>NAME</strong></th>
                                            <th><strong>GUARD</strong></th>
                                            <th><strong>DIBUAT</strong></th>
                                            <th><strong>DIUBAH</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                        <tr>
                                            <td><strong>{{ $i++ }}</strong></td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->guard_name }}</td>
                                            <td>{{ $role->created_at }}</td>
                                            <td>{{ $role->updated_at }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    @can('role-edit')
                                                    <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    @endcan
                                                    @can('role-delete')
                                                    <button class="btn btn-danger shadow btn-xs sharp" data-toggle="modal" data-target="#role_index-{{ $role->id }}"><i class="fa fa-trash"></i></button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="role_index-{{ $role->id }}">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <center>
                                                                        <svg width="150px" height="150px" viewBox="0 0 17 16" style="color:#CE4527;" class="bi bi-exclamation-triangle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M7.938 2.016a.146.146 0 0 0-.054.057L1.027 13.74a.176.176 0 0 0-.002.183c.016.03.037.05.054.06.015.01.034.017.066.017h13.713a.12.12 0 0 0 .066-.017.163.163 0 0 0 .055-.06.176.176 0 0 0-.003-.183L8.12 2.073a.146.146 0 0 0-.054-.057A.13.13 0 0 0 8.002 2a.13.13 0 0 0-.064.016zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                                        </svg>
                                                                    <h3 style="color: red;">WARNING</h3></center>
                                                                    <p style="text-align: justify;">Apakah Anda Yakin Ingin Menghapus Role <strong>{{ $role->name }}</strong> ? Data yang terhapus tidak akan bisa dikembalikan!</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                                    {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id],'class'=>'display:inline']) !!}
                                                                        {!! Form::button('Delete Role', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
@else
    <style>
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
    </div>
@endif
@endsection
