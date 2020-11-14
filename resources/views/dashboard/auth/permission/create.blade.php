@extends('layouts.dashboard.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Tambah Role Baru!</h4>
                    <p class="mb-0">Validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('menu.index')}}">Daftar Role</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Buat Baru</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Permission Baru</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="basic-form">
                                <form id="permission-create" action="{{ route('permissions.store') }}" method="POST">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Permission</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" placeholder="Permission">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Guard
                                            <br/><small>isikan <strong>web</strong> jika tidak tau</small>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="guard_name" placeholder="isikan web jika tidak tau">
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
<script>
     $(document).ready( () => {
        $('#permission-create').on('submit', function(event){
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
                        window.location.href = data.route;
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
