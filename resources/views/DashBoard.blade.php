@extends('layouts.app')

@section('title', 'Dashboard')

@push('plugin-css')
<link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Welcome to Connect Plus</h4>
                <p class="card-description">This is your main dashboard</p>
                
                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card bg-gradient-primary card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>
                                <h4 class="font-weight-normal mb-3">
                                    Total Users <i class="mdi mdi-account-multiple mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5">15,000</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>
                                <h4 class="font-weight-normal mb-3">
                                    Revenue <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5">$45,633</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>
                                <h4 class="font-weight-normal mb-3">
                                    Orders <i class="mdi mdi-cart mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5">95,574</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card bg-gradient-warning card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>
                                <h4 class="font-weight-normal mb-3">
                                    Growth <i class="mdi mdi-chart-bar mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5">25.6%</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Quick Actions</h4>
                                <div class="text-center mt-4">
                                    <a href="{{ route('tables.js-grid') }}" class="btn btn-primary btn-lg mr-3">
                                        <i class="mdi mdi-table-large"></i> Go to Js-grid Table
                                    </a>
                                    <a href="#" class="btn btn-success btn-lg mr-3">
                                        <i class="mdi mdi-chart-bar"></i> View Reports
                                    </a>
                                    <a href="#" class="btn btn-info btn-lg">
                                        <i class="mdi mdi-account-plus"></i> Add User
                                    </a>
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

@push('plugin-js')
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
@endpush

@push('custom-js')
<script src="{{ asset('js/dashboard.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dashboard loaded successfully');
});
</script>
@endpush