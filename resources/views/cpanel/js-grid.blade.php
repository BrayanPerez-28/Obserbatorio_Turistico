@extends('cpanel.index')

@section('content')

 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
  
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/jsgrid/jsgrid-theme.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  </head>
<div class="content-wrapper">
  <div class="row grid-margin">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Table</h4>
          <p class="card-description">A basic example of js-grid</p>
          <div id="js-grid"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendors/jsgrid/jsgrid.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/jsgrid/jsgrid-theme.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/vendors/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('assets/js/js-grid.js') }}"></script>
<script src="{{ asset('assets/js/db.js') }}"></script>
@endpush
