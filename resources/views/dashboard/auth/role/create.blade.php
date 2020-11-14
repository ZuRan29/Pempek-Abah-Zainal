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
                        <h4 class="card-title">Tambah Role Baru</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="basic-form">
                                <form id="role-create" action="{{ route('role.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Role</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" placeholder="Role">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pilih Permission</label>
                                        <div class="col-sm-9">
                                            <div class="row" style="padding-top: 11px;">
                                                @foreach ($permissions as $permission)
                                                <div class="col-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox-{{ $permission->id }}" name="permission[]" value="{{ $permission->id }}">
                                                        <label class="custom-control-label" for="customCheckBox-{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
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
{{-- <script>
     $(document).ready( () => {
        $('#role-create').on('submit', function(event){
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
</script> --}}
@endsection
