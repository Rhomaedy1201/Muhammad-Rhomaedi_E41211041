@extends('backend/layouts.template')

@section('content')

@include('backend/layouts.header')
@include('backend/layouts.sidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Tiket</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Riwayat</a></li>
        <li class="breadcrumb-item"><a href="">Data Tiket</a></li>
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
              <h5 class="card-title">Data Tiket</h5>
          
              <!-- Horizontal Form -->
              <form>
                <div class="panael-body">
                  @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                  @endif
                </div>
                <div class="text-start">
                  <a href="{{ route('data_tiket.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah</a>
                </div>
              </form>
              <br>
              <br>
              <!-- End Horizontal Form -->
              {{-- Table --}}
              <table class="table table-striped table-advace table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_bag"></i>No</th>
                    <th><i class="icon_bag"></i>Nama Tiket</th>
                    <th><i class="icon_document"></i>Lokasi</th>
                    <th><i class="icon_calender"></i>Harga</th>
                    <th><i class="icon_calender"></i>Jumlah Tiket</th>
                    <th><i class="icon_cogs"></i>Action</th>
                  </tr>
                  <?php $index = 0 ?>
                  @foreach ($data_tiket as $item)
                  <?php $index++ ?>
                  <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $item->nama_tiket }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->jumlah_tiket }}</td>
                    <td>
                      <div class="btn-group">
                        {{-- <form action="" method="POST"> --}}
                        <form action="{{ route('data_tiket.destroy', $item->id) }}" method="POST">
                          {{-- <a class="btn btn-warning" href="{{ 'data_tiket/update' }}"> --}}
                          <a class="btn btn-warning" href="{{ route('data_tiket.edit',$item->id) }}">
                            <i class="ri-edit-2-line"></i>
                          </a>

                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini??..')">
                            <i class="ri-delete-bin-2-line"></i>
                          </button>
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
      </div>

          

    </div>
  </section>

</main><!-- End #main -->

@endsection