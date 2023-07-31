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
                                                            style="text-align:center; vertical-align:middle; ">Variabel
                                                        </th>
                                                        <!--  Sementara <th rowspan="2" style="text-align:center; vertical-align:middle; ">Kategori</th>-->

                                                        <th colspan="10"
                                                            style="text-align:center; vertical-align:middle; ">
                                                            Kecamatan Kemang
                                                        </th>

                                                    </tr>
                                                    <tr>

                                                        <th style="text-align:center; vertical-align:middle; ">D1</th>
                                                        <th style="text-align:center; vertical-align:middle; ">D2</th>
                                                        <th style="text-align:center; vertical-align:middle; ">D3</th>
                                                        <th style="text-align:center; vertical-align:middle; ">D4</th>
                                                        <th style="text-align:center; vertical-align:middle; ">D5
                                                        </th>
                                                        <th style="text-align:center; vertical-align:middle; ">D6</th>
                                                        <th style="text-align:center; vertical-align:middle; ">D7</th>
                                                        <th style="text-align:center; vertical-align:middle; ">D8</th>
                                                        <th style="text-align:center; vertical-align:middle; ">D9</th>
                                                        <th style="text-align:center; vertical-align:middle; ">Bobot</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Bayesian as $bs)
                                                        <tr>


                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->desa }}</td>

                                                            <td>
                                                                {{ $bs->D1 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->D2 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->D3 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->D4 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->D5 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->D6 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->D7 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->D8 }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->D9 }}</td>
                                                            <td>{{ $bs->Bobot }}</td>




                                                        </tr>
                                                    @endforeach
                                                </tbody>

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

                                                            <td style="vertical-align:middle; ">
                                                                {{ $bs->des }}</td>
                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->TN }}</td>


                                                            <td style="text-align:center; vertical-align:middle; ">
                                                                {{ $bs->peringkat }}

                                                            </td>
                                                    @endforeach
                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <!--/ Responsive Table -->
                                    <br>
                                    <!--
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaiD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilai1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilai2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilai3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilai4D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilai5D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilai6D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilai7D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilai8D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>bobot16</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaiaD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaibD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaicD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaidD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaifD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaigD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaihD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaiiD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaijD1 }}</p>
                                                                                                                                                                                                                                                                                            <p>bobot0.11</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaia1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaib1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaic1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaid1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaif1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaig1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaih1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaii1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaij1D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>bobot0.09</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaia2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaib2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaic2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaid2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaif2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaig2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaih2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaii2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaij2D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>bobot0,1</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaia3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaib3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaic3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaid3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaif3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaig3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaih3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaii3D1 }}</p>
                                                                                                                                                                                                                                                                                            <p>Hitungan D1 {{ $nilaij3D1 }}</p>
                                                                                                                                                                                                                                                                                            -->

                                    <p>Klasifikasi Total Nilai <br>
                                        Nilai Minimum = {{ $Min }} <br>
                                        Nilai Maksimum = {{ $Max }} <br>
                                        Jangkauan = {{ $jangkauan1 }} <br>
                                        Interval = {{ $inv }} <br>
                                        Maka nilai klasifikasi yang didapat dengan keterangannya sebagai berikut</p>
                                    @php $i=1 @endphp
                                    Cukup Berpotensi = {{ $ranges }} <br>
                                    Berpotensi = {{ $ranges }} - {{ $ranges + $ranges }} <br>
                                    Sangat Berpotensi = > {{ $ranges + $ranges + $i }} <br>



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
                                <span class="align-middle">Support Vector Machine</span>
                            </h4>

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
