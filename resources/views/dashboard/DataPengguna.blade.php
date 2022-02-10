@extends('layouts.datapengguna')

@section('title')
{{-- judul halaman ini --}}
Data Pengguna
@endsection

@section('link')
{{-- masukin link untuk halaman ini jika diperlukan --}}

@endsection

@section('style')
{{-- masukin style css untuk halaman ini jika diperlukan --}}

@endsection

@section('content')
{{-- masukin content halaman disini --}}
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Data</strong> Pengguna</h1>
    <div class="col-lg-6 col-5 text-right">
        <button class="btn btn-sm btn-success createButton">Tambah Akun</button>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Akun
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-50">
                        <form action="{{ url('/create-data-pengguna') }}" method="post">
                            @csrf
                            <label class="text-bold-600" for="username">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" autocomplete="off" required autofocus>
                    </div>
                    <div class="form-group mb-50">
                        <label for="role">Role</label>
                        <select class="form-select" id="cars" name="role">
                            <option value="Admin">Admin</option>
                            <option value="Kepala Bidang">Kepala Bidang</option>
                            <option value="Kepala Dinas">Kepala Dinas</option>
                        </select>
                    </div>
                    <div class="form-group mb-50">
                        <label class="text-bold-600" for="username">Username <span class="text-danger">*</span></label>
                        <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-bold-600" for="password">Kata Sandi <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
</div>
<div class="card-body">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
    @if(session('edit'))
    <div class="alert alert-info" role="alert">
        {{session('edit')}}
    </div>
    @endif
    @if(session('edit'))
    <div class="alert alert-danger" role="alert">
        {{session('edit')}}
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <table class="table datatable table-responsive" style="width: 100%">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th>Role</th>
                        <th style="width: 15%">Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th class="text-center" style="width: 15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no =1;
                    @endphp
                    @foreach($users as $data)
                    <tr>

                        <td>{{$no++}}</td>
                        <td>{{$data->role}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->username}}</td>
                        <td>{{$data->password}}</td>
                        <td></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-info editButton" data-toggle="modal" data-target="#edit-modal{{$data->id}}">Edit</button>
                                <form method="POST" action="pengguna/delete/{{$data->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger deleteButton" onclick="return confirm('Are you sure?')" value="">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@foreach ($users as $data)
<div class="modal fade" id="edit-modal{{$data->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form role="form" action="/pengguna/update/{{$data->id}}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User ID</label>
                            <input type="text" class="form-control" name="id" placeholder="User ID" value="{{$data->id}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{$data->username}}">
                        </div>
                        <div class="form-group mb-50">
                            <label for="role">Role</label>
                            <select class="form-select" id="role" name="role">
                                <option selected value="{{$data->role}}">{{$data->role}}</option>
                                <option value="Admin">Admin</option>
                                <option value="Kepala Bidang">Kepala Bidang</option>
                                <option value="Kepala Dinas">Kepala Dinas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach




@endsection

@section('script')
{{-- Masukkin javascript khusus disini kalau diperlukan --}}
<script>
    $(".createButton").on("click", function() {
        $("#createModal").modal();
    });
</script>
@endsection