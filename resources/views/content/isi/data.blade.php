@extends('layouts/layoutMaster')

@section('title', 'Peta Klasifikasi')

@section('vendor-style')

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
@endsection

@section('vendor-script')

    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>



@endsection



@section('content')

    <div class="row">






        <hr class="my-1">

        <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Ubah Data</h4>
        <!-- Responsive Datatable -->
        <div class="card">
            <h5 class="card-header"></h5>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>

                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">Variabel
                            </th>
                            <!--  Sementara <th rowspan="2" style="text-align:center; vertical-align:middle; ">Kategori</th>-->

                            <th colspan="11" style="text-align:center; vertical-align:middle; ">
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
                            <th style="text-align:center; vertical-align:middle; ">Aksi</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Bayesian as $bs)
                            <tr>


                                <td style="text-align:center; vertical-align:middle; ">
                                    {{ $bs->desa }}</td>

                                <td style="text-align:center; vertical-align:middle; ">
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

                                <td style="text-align:center; vertical-align:middle; ">
                                    {{ $bs->Bobot }}</td>
                                <td>
                                    <a href="" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="ti ti-dots-vertical ti-sm mx-1"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end m-0"
                                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-32px, 162px);"
                                        data-popper-placement="bottom-end">


                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('data.destroy', $bs->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti ti-trash ti-sm mx-2"
                                                style="background-color: transparent; font-size:1%;
                                background-repeat: no-repeat;
                                border: none;
                                cursor: pointer;
                                overflow: hidden;
                                outline: none;"></button>

                                            <a class="text-body" href="{{ route('data.edit', $bs->id) }}">


                                                <i class="ti ti-edit ti-sm me-2" style="margin-left: -10px;">
                                                </i>
                                            </a>


                                        </form>






                                    </div>
            </div>






            </td>



            </tr>
            @endforeach
            </tbody>


            </table>
        </div>
    </div>
    <!--/ Responsive Datatable -->



    </div>
    <!-- End: Content-->

@endsection
