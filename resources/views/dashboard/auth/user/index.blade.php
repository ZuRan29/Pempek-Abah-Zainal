@extends('layouts.dashboard.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Daftar User!</h4>
                    <span>Card</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Daftar User</a></li>
                    {{-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Card</a></li> --}}
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card-header">
                                <h4 class="card-title">Daftar User</h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <a href="{{ route('users.create') }}"><button type="button" style="margin-top:15px;" class="btn btn-info btn-sm">Buat User Baru <span
                                class="btn-icon-right"><i style="margin-right:10px" class="fa fa-plus color-info"></i></span>
                            </button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dashboard_user" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Tanggal Buat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-toggle="modal" data-target="#user_index-{{ $user->id }}"><i class="fa fa-trash"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="user_index-{{ $user->id }}">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <center>
                                                                    <svg width="150px" height="150px" viewBox="0 0 17 16" style="color:#CE4527;" class="bi bi-exclamation-triangle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M7.938 2.016a.146.146 0 0 0-.054.057L1.027 13.74a.176.176 0 0 0-.002.183c.016.03.037.05.054.06.015.01.034.017.066.017h13.713a.12.12 0 0 0 .066-.017.163.163 0 0 0 .055-.06.176.176 0 0 0-.003-.183L8.12 2.073a.146.146 0 0 0-.054-.057A.13.13 0 0 0 8.002 2a.13.13 0 0 0-.064.016zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                                      </svg>

                                                                <h3 style="color: red;">WARNING</h3></center>
                                                                <p style="text-align: justify;">Apakah Anda Yakin Ingin Menghapus User <strong>{{ $user->name }}</strong> ? Data yang terhapus tidak akan bisa dikembalikan!</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'class'=>'display:inline']) !!}
                                                                    {!! Form::button('Delete User', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Tanggal Buat</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $('#dashboard_user').DataTable();
} );
</script>

@if (session('success'))
<script>
    toastr.success('{{ session("success") }}');
</script>
@endif


@endsection
