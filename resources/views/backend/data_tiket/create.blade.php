@extends('backend/layouts.template')

@section('content')

@include('backend/layouts.header')
@include('backend/layouts.sidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Data Tiket</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Riwayat</a></li>
        <li class="breadcrumb-item active">Tambah Data Tiket</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Tiket</h5>

              <!-- Horizontal Form -->
              <form id="pengalaman_kerja_form" method="POST" 
              action="{{ isset($data_tiket) ? route('data_tiket.update', $data_tiket->id) : 
              route('data_tiket.store') }}">
              {{-- <form id="pengalaman_kerja_form" method="POST" 
              action="{{ route('data_tiket.store') }}"> --}}
                {!! csrf_field() !!}
                {!! isset($data_tiket) ? method_field('PUT') : '' !!}
                <input type="hidden" name="id" value=""><br>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Tiket</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_tiket" name="nama_tiket" 
                    value="{{ isset($data_tiket) ? $data_tiket->nama_tiket : '' }}" required />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="lokasi" name="lokasi" 
                    value="{{ isset($data_tiket) ? $data_tiket->lokasi : '' }}" required />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga" 
                    value="{{ isset($data_tiket) ? $data_tiket->harga : '' }}" required />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Tiket</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket" 
                    value="{{ isset($data_tiket) ? $data_tiket->jumlah_tiket : '' }}" required />
                    {{-- <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket" 
                    value="" required /> --}}
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('data_tiket.index') }}" class="btn btn-secondary">
                  {{-- <a href="" class="btn btn-secondary"> --}}
                    Cancel
                  </a>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

      </div>
    </div>

  </div>
</section>

</main><!-- End #main -->

@endsection
