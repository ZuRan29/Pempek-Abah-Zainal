@extends('layouts.dashboard.template')
@section('content')
@if (auth()->user()->can('permission-edit'))
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, Edit Permission!</h4>
                        <p class="mb-0">Validation</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('permissions.index')}}">Daftar Permission</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Permission</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Permission {{ $permission->name }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="role-create-edit" action="{{ route('permissions.update', $permission->id) }}" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Permission</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" placeholder="Permission" value="{{ $permission->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Guard
                                                <br/><small>isikan <strong>web</strong> jika tidak tau</small>
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="guard_name" placeholder="isikan web jika tidak tau" value="{{ $permission->guard_name }}">
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

    <script>
        $(document).ready( () => {
            $('#user-create-edit').on('submit', function(event){
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
@else
    @include('layouts.dashboard.auth.permission')
@endif
@endsection
