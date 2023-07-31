@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Penelitian')
@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>



@endsection
<!-- Page -->
@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-faq.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
@endsection

@section('content')
    <div class="faq-header d-flex flex-column justify-content-center align-items-center rounded">
        <h2 class="text-center">Klasifikasi Smart Community</h2>

        <h5 class="text-center mb-0 px-3">Menggunakan Metode Bayesian dan SVM</h5>
    </div>

    <div class="row mt-4">
        <!-- Navigation -->
        <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
            <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                <ul class="nav nav-align-left nav-pills flex-column">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#payment">
                            <i class="ti ti-square-1-filled me-1 ti-sm"></i>
                            <span class="align-middle fw-semibold">Bayesian</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
                            <i class="ti ti-square-2-filled me-1 ti-sm"></i>
                            <span class="align-middle fw-semibold">SVM</span>
                        </button>
                    </li>


                </ul>
                <div class="d-none d-md-block">
                    <div class="mt-4">
                        <img src="{{ asset('assets/img/svm.png') }}" class="img-fluid" width="270" alt="FAQ Image">
                    </div>
                </div>
            </div>
        </div>
        <!-- /Navigation -->

        <!-- FAQ's -->
        <div class="col-lg-9 col-md-8 col-12">
            <div class="tab-content py-0">
                <div class="tab-pane fade show active" id="payment" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                        <span class="badge bg-label-primary rounded-2 p-2">
                            <i class="ti ti-square-1-filled ti-lg"></i>
                        </span>
                        <div>
                            <h4 class="mb-0">
                                <span class="align-middle">Bayesian</span>
                            </h4>
                            <small>Get help wi</small>
                        </div>
                    </div>
                    <div id="accordionPayment" class="accordion">
                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    aria-expanded="true" data-bs-target="#accordionPayment-1"
                                    aria-controls="accordionPayment-1">
                                    Pembobotan Bayesian
                                </button>
                            </h2>

                            <div id="accordionPayment-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">



                                    <!-- Responsive Table -->
                                    <div class="card">

                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                <thead>
                                                    <tr>

                                                        <th rowspan="2"
                                                            style="text-align:center; vertical-align:middle; ">Desa
                                                        </th>
                                                        <!--  Sementara <th rowspan="2" style="text-align:center; vertical-align:middle; ">Kategori</th>-->

                                                        <th colspan="10"
                                                            style="text-align:center; vertical-align:middle; ">
                                                            Kecamatan Kemang
                                                        </th>

                                                    </tr>
                                                    <tr>

                                                        <th style="text-align:center; vertical-align:middle; ">X1</th>
                                                        <th style="text-align:center; vertical-align:middle; ">X2</th>
                                                        <th style="text-align:center; vertical-align:middle; ">X3</th>
                                                        <th style="text-align:center; vertical-align:middle; ">X4</th>
                                                        <th style="text-align:center; vertical-align:middle; ">X5
                                                        </th>
                                                        <th style="text-align:center; vertical-align:middle; ">X6</th>
                                                        <th style="text-align:center; vertical-align:middle; ">X7</th>
                                                        <th style="text-align:center; vertical-align:middle; ">X8</th>
                                                        <th style="text-align:center; vertical-align:middle; ">X9</th>
                                                        <th style="text-align:center; vertical-align:middle; ">X10</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Bayesian as $bs)
                                                        <tr>


                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->desa }}</td>

                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X1 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X2 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X3 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X4 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X5 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X6 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X7 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X8 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X9 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X10 }}</td>



                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Bobot</th>
                                                        @foreach ($Bayesian as $bs)
                                                            <td>{{ $bs->Bobot }}</td>
                                                        @endforeach

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!--/ Responsive Table -->

                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header mt-2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    aria-expanded="true" data-bs-target="#accordionPayment-1"
                                    aria-controls="accordionPayment-1">
                                    Klasifikasi Total Nilai
                                </button>
                            </h2>

                            <div id="accordionPayment-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">



                                    <!-- Responsive Table -->
                                    <div class="card">

                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                <thead>

                                                    <tr>

                                                        <th style="text-align:center; vertical-align:middle; ">Nama Desa
                                                        </th>
                                                        <th style="text-align:center; vertical-align:middle; ">Total Nilai
                                                            (TN) / Nilai Index</th>
                                                        <th style="text-align:center; vertical-align:middle; ">Peringkat
                                                        </th>



                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Bayesian as $bs)
                                                        <tr>


                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->desa }}</td>

                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X1 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->X2 }}</td>




                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <!--/ Responsive Table -->
                                    <br>
                                    <p>Klasifikasi Total Nilai
                                        Nilai Minimum = 16.25 <br>
                                        Nilai Maksimum = 32.5 <br>
                                        Jangkauan = 26.5 – 21.25 = 16.25 <br>
                                        Interval = 5/3 = 5.41 <br>
                                        Maka nilai klasifikasi yang didapat dengan keterangannya sebagai berikut</p>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
                <div class="tab-pane fade" id="delivery" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                        <div>
                            <span class="badge bg-label-primary rounded-2 p-2">
                                <i class="ti ti-square-2-filled ti-lg"></i>
                            </span>
                        </div>
                        <div>
                            <h4 class="mb-0">
                                <span class="align-middle">SVM</span>
                            </h4>
                            <small>Lorem ipsum, dolor sit amet.</small>
                        </div>
                    </div>
                    <div id="accordionDelivery" class="accordion">
                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    aria-expanded="true" data-bs-target="#accordionDelivery-1"
                                    aria-controls="accordionDelivery-1">
                                    Hasil SVM
                                </button>
                            </h2>

                            <div id="accordionDelivery-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Setelah Melakukan proses data testing dan data training, langkah terakhir adalah Uji
                                    coba SVM
                                    <script src="https://gist.github.com/reyhannazera16/c1485f1dae650dc5e17e0d3cdd53b9cd.js"></script>
                                </div>
                            </div>




                        </div>
                    </div>



                </div>
            </div>
            <!-- /FAQ's -->
        </div>


    @endsection
