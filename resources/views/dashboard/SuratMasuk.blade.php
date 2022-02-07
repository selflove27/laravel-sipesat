@extends('layouts.dashboard')

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
		<button class="btn pull-right btn-sm btn-success createButton " >Tambah Data</button>
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

						<tr>

							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div class="btn-group btn-group-sm">
									<button class="btn btn-info editButton" value="">Edit</button>
									<button class="btn btn-danger deleteButton" value="">Hapus</button>
								</div>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection

@section('script')
	{{-- Masukkin javascript khusus disini kalau diperlukan --}}

@endsection
