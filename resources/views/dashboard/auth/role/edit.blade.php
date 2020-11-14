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
                        <h4 class="card-title">Edit Role {{ $roles->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="basic-form">
                                <form id="role-create-edit" action="{{ route('role.update', $roles->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Role</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" value="{{ $roles->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pilih Permission</label>
                                        <div class="col-sm-9">
                                            <div class="row" style="padding-top: 11px;">
                                                @foreach ($permissions as $permission)
                                                <div class="col-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox-{{ $permission->id }}" name="permission[]" value="{{ $permission->id }}"
                                                        @if (in_array($permission->id, $rolePermissions)) checked @endif >
                                                        <label class="custom-control-label" for="customCheckBox-{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
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
@endsection
