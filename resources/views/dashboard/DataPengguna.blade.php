@extends('layouts.dashboard')

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
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group mb-50">
      <form action="{{ url('/create-data-pengguna') }}" method="post">
            @csrf
                        <label class="text-bold-600" for="username">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required autofocus>
                    </div>
                    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                    <div class="form-group mb-50">
                        <label class="text-bold-600" for="username">Username <span class="text-danger">*</span></label>
                        <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-bold-600" for="password">Kata Sandi <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" placeholder="***********" required>
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
								<td></td>
								<td>
									<div class="btn-group btn-group-sm">
										<button class="btn btn-info editButton" value="">Edit</button>
										<button class="btn btn-danger deleteButton" value="">Hapus</button>
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
	<!-- <div class="modal fade show" id="createModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title white" >Tambah Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{ url('/data-pengguna') }}" method="post">
            @csrf
-->
            <!-- <div class="modal-body"
                    <div class="form-group mb-50">
                        <label class="text-bold-600" for="username">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required autofocus>
                    </div>
                    <div class="form-group mb-50">
                        <label class="text-bold-600" for="username">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group mb-50">
                        <label class="text-bold-600" for="username">Nomor Telepon <span class="text-danger">*</span></label>
                        <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                    <div class="form-group mb-50">
                        <label class="text-bold-600" for="username">Alamat <span class="text-danger">*</span></label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-bold-600" for="password">Kata Sandi <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" placeholder="***********" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Kembali</span>
                    </button>
                    <button type="submit" class="btn btn-success ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
				-->
            </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
	{{-- Masukkin javascript khusus disini kalau diperlukan --}}
<script>
    $(".createButton").on("click", function(){
        $("#createModal").modal();
    });
</script>
@endsection
