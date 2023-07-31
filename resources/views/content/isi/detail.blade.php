@extends('layouts/layoutMaster')

@section('title', 'Cards basic - UI elements')

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Dokumentasi</h4>

    <!-- Grid Card -->
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-1">
        <div class="col">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('assets/img/elements/2.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Kecamatan</h5>
                    <p class="card-text" style="text-align: justify">Dokumentasi saat melakukan wawancara pakar Kepala
                        Kecamatan Kemang Kabupaten
                        Bogor.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('assets/img/elements/10.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">UMKM</h5>
                    <p class="card-text" style="text-align: justify">Dokumentasi saat melihat secara langsung lokasi UMKM
                        membatik di desa tegal.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('assets/img/elements/4.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Implementasi Sistem</h5>
                    <p class="card-text" style="text-align: justify">Dokumentasi Implementasi hasil hitungan klasifikasi
                        potensial smart community dalam bentuk peta </p>
                </div>
            </div>
        </div>


    </div>

@endsection
