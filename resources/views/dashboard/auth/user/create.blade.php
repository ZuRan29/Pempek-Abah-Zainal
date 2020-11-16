@extends('layouts.dashboard.template')
@section('content')
@if (auth()->user()->can('user-create'))
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, Tambah User Baru!</h4>
                        <p class="mb-0">Validation</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Daftar Users</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Buat Baru</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Role Baru</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="user-create" action="{{ route('users.store') }}" method="POST">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                                Nama
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Nama" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                                Username
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Username" name="username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                                Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                                Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                                Confirm Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
                                                <br>
                                                <p id="message"></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                                Pilih Role
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-lg" name="role">
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Validation Password --}}
    <script>
        $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Password Cocok').css('color', 'green');
            } else
                $('#message').html('Password Tidak Sama').css('color', 'red');
            });
    </script>
    {{-- POST To Database --}}
    <script>
        $(document).ready( () => {
            $('#user-create').on('submit', function(event){

                // check if the input is valid using a 'valid' property
                if ($('#password').val() !== $('#confirm_password').val()) return false;

                event.preventDefault();
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: $(this).attr("action"),
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: (data) => {
                        if(data.status == "ok"){
                            toastr["success"](data.messages);
                            window.location.href = '{{ route("users.index") }}';
                        }
                    },

                    error: (data) => {
                        var data = data.responseJSON;
                        if(data.status == "fail"){
                            toastr["error"](data.messages);
                        }
                    }
                });
            });

        });
    </script>
@else
    @include('layouts.dashboard.auth.permission')
@endif
@endsection
