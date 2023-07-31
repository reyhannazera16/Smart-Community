@extends('layouts/layoutMaster')

@section('title', 'Dokumentasi')

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3"><span class="text-muted fw-light">Dokumentasi /</span> Sumber Data </h4>

    <div class="card-group mb-2">
        <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/ig.png') }}" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">Indonesia Geospasial</h5>
                <p class="card-text" style="text-align: justify;">
                    Indonesia Geospasial membantu dan menyalurkan peta Rupa Bumi Indonesia (RBI), yang secara resmi
                    dikeluarkan oleh Badan Informasi Geospasial. Data shapefile yang digunakan pada website ini merupakan
                    data tahun 2020.
                </p>
            </div>
            <div class="card-footer">
                <a href="https://www.indonesia-geospasial.com/2020/01/shp-rbi-provinsi-jawa-barat-perwilayah.html"
                    target="BLANK" class="btn btn-primary">Lebih lanjut</a>
            </div>

        </div>
        <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/elements/5.jpg') }}" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">Google Form</h5>
                <p class="card-text" style="text-align: justify;">Data yang digunakan dalam penelitian ini merupakan data
                    yang didapatkan dari hasil survey
                    menggunakan Google Form, data yang dapat sebanyak 300 responden.</p>
            </div>
            <div class="card-footer">
                <a href="https://docs.google.com/spreadsheets/d/1K05n3I9o6aYtxEkKr80ZaRYsyaMZFkiD/edit?usp=sharing&ouid=101294861249031951715&rtpof=true&sd=true"
                    target="BLANK" class="btn btn-primary">Lebih lanjut</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/elements/1.jpg') }}" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">Dokumentasi</h5>
                <p class="card-text" style="text-align: justify;">
                    Dokumentasi yang ditampilkan seperti proses pengolahan data, implementasi web dan foto bersama Kepala
                    Kecamatan Kemang, Kabupaten Bogor.
                </p>
            </div>
            <div class="card-footer">
                <a href="https://www.indonesia-geospasial.com/2020/01/shp-rbi-provinsi-jawa-barat-perwilayah.html"
                    class="btn btn-primary">Lebih lanjut</a>
            </div>
        </div>
    </div>

    <!--/ Card layout -->
@endsection
