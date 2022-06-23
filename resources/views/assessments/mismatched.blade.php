@extends('layouts.vertical')


@section('css')
    <link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
    <div class="row page-title align-items-center">
        <div class="col-sm-7 col-xl-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Assessements</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Mismatched Assessements</h4>
        </div>
    </div>
@endsection

@section('content')
    <!-- stats + charts -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="card bg-primary">
                        <h4 class="header-title m-2 text-light">Extent of Mis-match</h4>
                    </div>
                    <div id="mismatch-chart" class="apex-charts mt-3" dir="ltr"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="card bg-primary">
                        <h4 class="header-title m-2 text-light">Platform Wise</h4>
                    </div>
                    <div id="platform-chart" class="apex-charts mt-3" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->


    <!-- widgets -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="card bg-primary">
                        <h4 class="header-title m-2 text-light">Country Wise</h4>
                    </div>
                    <div id="country-chart" class="apex-charts mt-3" dir="ltr"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
@endsection

@section('script')
    <!-- optional plugins -->
    <script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('script-bottom')
    <!-- init js -->
    <script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
@endsection
