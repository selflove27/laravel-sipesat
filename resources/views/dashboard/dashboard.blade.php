@extends('layouts.dashboard')

@section('title')
  {{-- judul halaman ini --}}
  Admin
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

    <h1 class="h3 mb-3"><strong>Dashboard</strong> SIPESAT</h1>

    <div class="row">
      <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
          <div class="row">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Surat Masuk</h5>
                    </div>
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="arrow-down"></i>
                      </div>
                    </div>
                  </div>
                  <h4 class="mt-1 mb-3">penjualan</h1>
                    <div class="mb-0">
                      <span class="text-muted"><small>Data di hitung secara otomatis</small></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Surat Keluar</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="arrow-up"></i>
                        </div>
                      </div>
                    </div>
                    <h4 class="mt-1 mb-3">pengunjung</h4>
                    <div class="mb-0">
                      <span class="text-muted"><small>Data di hitung secara otomatis</small></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Data Disposisi</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="file"></i>
                        </div>
                      </div>
                    </div>
                    <h4 class="mt-1 mb-3">format</h4>
                    <div class="mb-0">
                      <span class="text-muted"><small>Data di hitung secara otomatis</small></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Data Pengguna</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="users"></i>
                        </div>
                      </div>
                    </div>
                    <h4 class="mt-1 mb-3">pesanan</h4>
                    <div class="mb-0">
                      <span class="text-muted"><small>Data di hitung secara otomatis</small></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection

@section('script')
  {{-- Masukkin javascript khusus disini kalau diperlukan --}}

@endsection
