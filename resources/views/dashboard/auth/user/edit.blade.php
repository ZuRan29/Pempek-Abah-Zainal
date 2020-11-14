@extends('layouts.dashboard.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Edit Role!</h4>
                    <p class="mb-0">Validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('menu.index')}}">Daftar Role</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Role</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit User {{ $user->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="basic-form">
                                <form id="role-create-edit" action="{{ route('users.update', $user->id) }}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Nama" value="{{ $user->name }}" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Username" value="{{ $user->username }}" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Email" value="{{ $user->email }}" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
                                            <br>
                                            <p id="message"></p>
                                        </div>
                                    </div>
                                    {{-- <fieldset class="form-group">
                                        <div class="row">
                                            <label class="col-form-label col-sm-3 pt-0">Radios</label>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                                    <label class="form-check-label">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                                    <label class="form-check-label">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" value="option3" disabled>
                                                    <label class="form-check-label">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-sm-3">Checkbox</div>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Example checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button class="btn btn-primary">Update</button>
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
        $('#user-create-edit').on('submit', function(event){

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
                method:"PATCH",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: (data) => {
                    if(data.status == "ok"){
                        toastr["success"](data.messages);
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
@endsection
