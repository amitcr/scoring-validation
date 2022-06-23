@extends('layouts.vertical')


@section('css')
    <link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
    <div class="row page-title align-items-center">
        <div class="col-sm-7 col-xl-7">
            <h4 class="mb-1 mt-0">Dashboard</h4>
        </div>


        <div class="col-sm-5 col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <label class="font-weight-bold d-inline mr-2"><i class="icon-dual icon-xs mr-2"
                                    data-feather="hard-drive"></i>
                                Completed Assessments: </label>
                        </div>
                        <div class="col text-right">
                            <button class="btn btn-primary" id="btn-new-event">55515</button>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
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
                        <h4 class="header-title m-2 text-light">Pattern Wise</h4>
                    </div>

                    <div id="dashboard-pattern-chart" class="apex-charts mt-3" dir="ltr"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="card bg-primary">
                        <h4 class="header-title m-2 text-light">Matching %</h4>
                    </div>
                    <div id="dashboard-matching-chart" class="apex-charts mt-3" dir="ltr"></div>
                    <div class="col-md-12 text-center mb-1">
                        <a href="{{ route('assessments.mismatched') }}" class="btn btn-primary btn-sm width-50">View
                            all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->


    <!-- widgets -->
    <div class="row">

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card bg-primary">
                        <h4 class="header-title m-2 text-light">Monthly Assessements</h4>
                    </div>
                    <div id="apex-line-1" class="apex-charts" dir="ltr"></div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

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
