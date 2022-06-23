@extends('layouts.vertical')


@section('css')
    <link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('breadcrumb')
    <div class="row page-title align-items-center">
        <div class="col-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Assessements</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">All Assessements</h4>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="row">
                <div class="col-xl-5 col-sm-5">
                    <h6 class="card-title  p-3 mb-0 header-title">Assessements Listing</h6>
                </div>
                <div class="col-xl-7 col-sm-7">
                    <h6 class="card-title  p-3 mb-0 header-title">Total Assessements
                        <button class="btn btn-primary" id="btn-new-event">5436</button>
                    </h6>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="row">

                        <div class="col-2">
                            <h6 class="card-title  p-3 mb-0 header-title">Platform</h6>
                            <select class="custom-select m-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>DISC Strengths</option>
                                <option value="1">Four Temperaments</option>
                                <option value="2">DISC Strengths</option>
                                <option value="3">Four Temperaments</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <h6 class="card-title  p-3 mb-0 header-title">Pattern</h6>
                            <select class="custom-select m-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>The Executive (D-1)</option>
                                <option value="1">The Executive (D-1)</option>
                                <option value="2">The Strategist (D-S)</option>
                                <option value="3">The Negotiator</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <h6 class="card-title  p-3 mb-0 header-title">Country</h6>
                            <select class="custom-select m-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Canada</option>
                                <option value="1">Canada</option>
                                <option value="2">USA</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <h6 class="card-title  p-3 mb-0 header-title">Name</h6>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                placeholder="Name">
                        </div>
                        <div class="col-4">
                            <h6 class="card-title  p-3 mb-0 header-title">Affiliate/Company</h6>
                            <input type="text" class="form mb-2 mr-sm-2" id="inlineFormInputName2"
                                placeholder="Enter Affiliate/Company">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Applicant</th>
                                <th>Platform</th>
                                <th>Affiliate/Company</th>
                                <th>Pattern</th>
                                <th>Matching</th>
                                <th>Country</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark T. Barton</td>
                                <td>DISC Strengths</td>
                                <td>Affiliate Company Unit</td>
                                <td>The Executive (D-1)</td>
                                <td>Yes</td>
                                <td>USA</td>
                                <td>06-12-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Carloyon R. Lee</td>
                                <td>Four Temperaments</td>
                                <td>Trinity LLC</td>
                                <td>The Director (D-S)</td>
                                <td>NO</td>
                                <td>USA</td>
                                <td>06-18-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Marton R. Dunn</td>
                                <td>Four Temperaments</td>
                                <td>Wide Range Solutions</td>
                                <td>The Strategist (D-S)</td>
                                <td>NO</td>
                                <td>USA</td>
                                <td>05-16-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Robert L. Benedett</td>
                                <td>DISC Strengths</td>
                                <td>MVS</td>
                                <td>The Negotiator</td>
                                <td>YES</td>
                                <td>USA</td>
                                <td>05-22-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Airi Satou</td>
                                <td>Four Temperaments</td>
                                <td>Trinity LLC</td>
                                <td>The Director (D-S)</td>
                                <td>NO</td>
                                <td>USA</td>
                                <td>06-18-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Mark T. Barton</td>
                                <td>DISC Strengths</td>
                                <td>Affiliate Company Unit</td>
                                <td>The Executive (D-1)</td>
                                <td>Yes</td>
                                <td>USA</td>
                                <td>06-12-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Carloyon R. Lee</td>
                                <td>Four Temperaments</td>
                                <td>Trinity LLC</td>
                                <td>The Director (D-S)</td>
                                <td>NO</td>
                                <td>USA</td>
                                <td>06-18-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Marton R. Dunn</td>
                                <td>Four Temperaments</td>
                                <td>Wide Range Solutions</td>
                                <td>The Strategist (D-S)</td>
                                <td>NO</td>
                                <td>Canada</td>
                                <td>05-16-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Robert L. Benedett</td>
                                <td>DISC Strengths</td>
                                <td>MVS</td>
                                <td>The Negotiator</td>
                                <td>YES</td>
                                <td>USA</td>
                                <td>05-22-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Airi Satou</td>
                                <td>Four Temperaments</td>
                                <td>Trinity LLC</td>
                                <td>The Director (D-S)</td>
                                <td>NO</td>
                                <td>USA</td>
                                <td>06-18-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Mark T. Barton</td>
                                <td>DISC Strengths</td>
                                <td>Affiliate Company Unit</td>
                                <td>The Executive (D-1)</td>
                                <td>Yes</td>
                                <td>USA</td>
                                <td>06-12-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Carloyon R. Lee</td>
                                <td>Four Temperaments</td>
                                <td>Trinity LLC</td>
                                <td>The Director (D-S)</td>
                                <td>NO</td>
                                <td>USA</td>
                                <td>06-18-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Marton R. Dunn</td>
                                <td>Four Temperaments</td>
                                <td>Wide Range Solutions</td>
                                <td>The Strategist (D-S)</td>
                                <td>NO</td>
                                <td>USA</td>
                                <td>05-16-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Robert L. Benedett</td>
                                <td>DISC Strengths</td>
                                <td>MVS</td>
                                <td>The Negotiator</td>
                                <td>YES</td>
                                <td>USA</td>
                                <td>05-22-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Airi Satou</td>
                                <td>Four Temperaments</td>
                                <td>Trinity LLC</td>
                                <td>The Director (D-S)</td>
                                <td>NO</td>
                                <td>USA</td>
                                <td>06-18-2022</td>
                                <td><a href="{{ route('assessments.assessment') }}"><i class="fa fa-eye"
                                            style="size:30px;color:blue"></i></a></td>
                            </tr>

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    </div>
    </div>
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
