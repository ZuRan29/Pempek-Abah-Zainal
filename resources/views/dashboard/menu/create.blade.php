@extends('layouts.dashboard.template')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Tambah Baru Menu!</h4>
                    <p class="mb-0">Validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('menu.index')}}">Daftar Menu</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Baru</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Menu Baru</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form id="menu" class="form-valide" action="{{route('menu.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama Menu
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="nama_menu" placeholder="Masukan Nama Menu">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Deskripsi <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions" name="deskripsi" rows="5" placeholder="Deskripsi Makanan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Harga
                                                <span class="text-danger">*</span>
                                                <br><small>Masukan Angka</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-currency" name="harga" placeholder="70000">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Foto
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" id="foto" name="foto" class="custom-file-input">
                                                        <label class="custom-file-label">Pilih File</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
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

<script type="text/javascript">
        $('#menu').submit(function (event) {
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: $(this).attr("action"),
                type: "post",
                data: new FormData($('#menu')[0]),
                dataType: 'json',
                processData: false,
				contentType: false,
                success: function(data) {
                    if (data.status == "ok") {
                        toastr["success"](data.messages);
                        setTimeout(function(){
                            window.location.href = data.route;
                        }, 1500);
                    }
                },
                error: function(data) {
                    var data = data.responseJSON;
                        if(data.status == "fail"){
                            toastr["error"](data.messages);
                        }
                }
            });
         });
</script>
@endsection
