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
                    <li class="breadcrumb-item active" aria-current="page">Individual Assessements</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Individual Assessements</h4>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body p-0">
                        <h6 class="card-title border-bottom p-3 mb-0 header-title">Mark T. Barton</h6>
                        <div class="row py-1">
                            <div class="col-xl-4 col-sm-6">
                                <!-- stat 1 -->
                                <div class="media p-3">
                                    <i data-feather="file" class="align-self-center icon-dual icon-lg mr-4"></i>
                                    <div class="media-body">
                                        <h4 class="mt-0 mb-0">210</h4>
                                        <span class="text-muted font-size-13">Number of Assessements</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <!-- stat 2 -->
                                <div class="media p-3">
                                    <i data-feather="monitor" class="align-self-center icon-dual icon-lg mr-4"></i>
                                    <div class="media-body">
                                        <h4 class="mt-0 mb-0">121</h4>
                                        <span class="text-muted">Platform: Disc Strengths</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <!-- stat 3 -->
                                <div class="media p-3">
                                    <i data-feather="calendar" class="align-self-center icon-dual icon-lg mr-4"></i>
                                    <div class="media-body">
                                        <h4 class="mt-0 mb-0">12</h4>
                                        <span class="text-muted">Date Token: 06/12/2022</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- stats + charts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body bg-primary">
                            <h4 class="header-title m-1 text-light">Self Assessements</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-body bg-warning">
                                <h4 class="header-title m-1 text-light text-center">D(CHOLERIC)</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Most words</th>
                                            <th></th>
                                            <th>Least words</th>
                                            <th></th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body bg-success">
                                <h4 class="header-title m-1 text-light text-center">I(SANGUINE)</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Most words</th>
                                            <th></th>
                                            <th>Least words</th>
                                            <th></th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body bg-primary">
                                <h4 class="header-title m-1 text-light text-center">I(PHLEGMATIC)</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Most words</th>
                                            <th></th>
                                            <th>Least words</th>
                                            <th></th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body bg-primary">
                            <h4 class="header-title m-1 text-light">Temperament Needs:</h4>
                        </div>
                        <div class="card-body text-light">
                            <div class="row">
                                <div class="col-lg-2 bg-danger border border-light">
                                    <h1 class="text-light">D</h1>
                                </div>
                                <div class="col-lg-7 bg-danger border border-light">
                                    <p class="notify-details">I need a plan.</p>
                                    <p class="notify-details">I need to have fun.</p>
                                    <p class="notify-details">I need low key correction.</p>
                                    <p class="notify-details">I need to learn by doing.</p>
                                    <p class="notify-details">I need social investement with my friends.</p>
                                </div>
                                <div class="col-lg-3 bg-danger border border-light">
                                    <h1 class="text-light">5</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 bg-success border border-light">
                                    <h1 class="text-light">C</h1>
                                </div>
                                <div class="col-lg-7 bg-success border border-light">
                                    <p class="notify-details">I need to know why.</p>
                                    <p class="notify-details">I need you to show me first then tell me how.</p>
                                    <p class="notify-details">I need to ask questions.</p>
                                </div>
                                <div class="col-lg-3 bg-success border border-light">
                                    <h1 class="text-light">3</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 bg-warning border border-light">
                                    <h1 class="text-light">I</h1>
                                </div>
                                <div class="col-lg-7 bg-warning border border-light">
                                    <p class="notify-details">I need to help so i will not seek perfection.</p>
                                </div>
                                <div class="col-lg-3 bg-warning border border-light">
                                    <h1 class="text-light">1</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 bg-secondary border border-light">
                                    <h1 class="text-light">S</h1>
                                </div>
                                <div class="col-lg-7 bg-secondary border border-light">
                                    <p class="notify-details">I need facts logically given.</p>
                                </div>
                                <div class="col-lg-3 bg-secondary border border-light">
                                    <h1 class="text-light">1</h1>
                                </div>
                            </div>
                        </div>
                    </div>
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
