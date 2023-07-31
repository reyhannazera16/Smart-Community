@extends('layouts/layoutMaster')
@section('title', 'Edit Pengaduan')


@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/offcanvas-send-invoice.js') }}"></script>
    <script src="{{ asset('assets/js/app-invoice-add.js') }}"></script>
@endsection
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}">
    <!-- Form Validation -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}">



    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>



    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>


    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script>
        window.templateCustomizer = new TemplateCustomizer({
            cssPath: '',
            themesPath: '',
            defaultShowDropdownOnHover: true, // true/false (for horizontal layout only)
            displayCustomizer: true,
            lang: 'en',
            pathResolver: function(path) {
                var resolvedPaths = {
                    // Core stylesheets
                    'core.css': "{{ asset('assets/vendor/css/rtl/core.css') }}",
                    'core-dark.css': "{{ asset('assets/vendor/css/rtl/core-dark.css') }}",

                    // Themes
                    'theme-default.css': "{{ asset('assets/vendor/css/rtl/theme-default.css') }}",
                    'theme-default-dark.css': "{{ asset('assets/vendor/css/rtl/theme-default-dark.css') }}",
                    'theme-bordered.css': "{{ asset('assets/vendor/css/rtl/theme-bordered.css') }}",
                    'theme-bordered-dark.css': "{{ asset('assets/vendor/css/rtl/theme-bordered-dark.css') }}",
                    'theme-semi-dark.css': "{{ asset('assets/vendor/css/rtl/theme-semi-dark.css') }}",
                    'theme-semi-dark-dark.css': "{{ asset('assets/vendor/css/rtl/theme-semi-dark-dark.css') }}",
                }
                return resolvedPaths[path] || path;
            },
            'controls': ["rtl", "style", "layoutType", "showDropdownOnHover", "layoutNavbarFixed",
                "layoutFooterFixed", "themes"
            ],
        });
    </script>
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/tables-datatables-basic.js') }}"></script>
@endsection



@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">


            <div class="row">




                <h4 class="fw-bold"><span class="text-muted fw-light">Data / </span> Edit</h4>

                @if (session('success'))
                    <h5 class="alert alert-success">{{ session('success') }}</h5>
                @endif

                <form action="{{ route('data.update', $Bayesian->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">
                        <!-- Basic Layout -->
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Edit Data</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">D1</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D1" id="D1"
                                                    value="{{ $Bayesian->D1 }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">D2</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D2" id="D2"
                                                    value="{{ $Bayesian->D2 }}" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">D3</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D3" id="D3"
                                                    value="{{ $Bayesian->D3 }}" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">D4</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D4" id="D4"
                                                    value="{{ $Bayesian->D4 }}" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">D5</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D5" id="D5"
                                                    value="{{ $Bayesian->D5 }}" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">D6</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D6" id="D6"
                                                    value="{{ $Bayesian->D6 }}" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">D7</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D7" id="D7"
                                                    value="{{ $Bayesian->D7 }}" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">D8</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D8" id="D8"
                                                    value="{{ $Bayesian->D8 }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">D9</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="D9" id="D9"
                                                    value="{{ $Bayesian->D9 }}" />
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"
                                                for="basic-default-company">Bobot</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Bobot" id="Bobot"
                                                    value="{{ $Bayesian->Bobot }}" />
                                            </div>
                                        </div>













                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                                <a href="{{ route('data.index') }}"
                                                    class="btn btn-label-secondary">Back</a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Basic with Icons -->

                    </div>






            </div>
        </div>



    @endsection
