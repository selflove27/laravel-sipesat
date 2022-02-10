@extends('layouts.suratmasuk')

@section('title')
{{-- judul halaman ini --}}
Surat Masuk
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
	<h1 class="h3 mb-3"><strong>Data</strong> Surat Masuk</h1>

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Tambah Surat Masuk
	</button>
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
	@if(session('delete'))
	<div class="alert alert-danger" role="alert">
		{{session('delete')}}
	</div>
	@endif
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Surat Masuk</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group mb-50">
						<form action="{{ url('/create-surat-masuk') }}" method="post" enctype="multipart/form-data">
							@csrf
							<label class="text-bold-600" for="username">No Agenda <span class="text-danger">*</span></label>
							<input type="text" name="no_agenda" class="form-control" placeholder="Nomor Agenda" autocomplete="off" required autofocus>
					</div>
					<div class="form-group mb-50">
						<label for="role">Jenis Surat</label>
						<select class="form-select" id="jenis_surat" name="jenis_surat">
							<option value="Undangan">Undangan</option>
							<option value="Surat Masuk">Surat Masuk</option>
						</select>
					</div>
					<div class="form-group mb-50">
						<label class="text-bold-600" for="username">Nomor Surat <span class="text-danger">*</span></label>
						<input type="text" name="nomor_suratmasuk" class="form-control" placeholder="Nomor surat" autocomplete="off" required>
					</div>
					<div class="form-group mb-50">
						<label class="text-bold-600" for="username">Tanggal Surat <span class="text-danger">*</span></label>
						<input type="date" name="tgl_suratmasuk" class="form-control" placeholder="Username" autocomplete="off" required>
					</div>
					<div class="form-group mb-50">
						<label class="text-bold-600" for="username">Pengirim <span class="text-danger">*</span></label>
						<input type="text" name="pengirim" class="form-control" placeholder="Pengirim" autocomplete="off" required>
					</div>
					<div class="form-group mb-50">
						<label class="text-bold-600" for="username">Perihal <span class="text-danger">*</span></label>
						<input type="text" name="perihal" class="form-control" placeholder="Perihal" autocomplete="off" required>
					</div>
					<div class="form-group mb-50">
						<label class="text-bold-600" for="username">Tanggal diterima <span class="text-danger">*</span></label>
						<input type="date" name="tgl_diterima" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group mb-50">
						<label class="text-bold-600" for="username">Dokumen <span class="text-danger">*</span></label>
						<input type="file" name="dokumen" class="form-control" autocomplete="off" required>
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
						<th>No Agenda</th>
						<th>Jenis Surat</th>
						<th style="width: 15%">Nomor Surat</th>
						<th>Tanggal Surat</th>
						<th>Pengirim</th>
						<th>Perihal</th>
						<th>Tanggal diterima</th>
						<th>Dokumen</th>
						<th class="text-right" style="width: 15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($surat_masuks as $data)
					<tr>
						@if($data == null)
						<td>1</td>
						<td>Tidak Ada Surat Masuk</td>
						<td>
							@endif

						<td>1</td>
						<td>{{$data->no_agenda}}</td>
						<td>{{$data->jenis_surat}}</td>
						<td>{{$data->nomor_suratmasuk}}</td>
						<td>{{$data->tgl_suratmasuk}}</td>
						<td>{{$data->pengirim}}</td>
						<td>{{$data->perihal}}</td>
						<td>{{$data->tgl_diterima}}</td>
						<td>{{$data->dokumen}}</td>
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

@endsection

@section('script')
{{-- Masukkin javascript khusus disini kalau diperlukan --}}

@endsection