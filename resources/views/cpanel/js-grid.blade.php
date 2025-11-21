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

          <div class="d-flex justify-content-between mb-3">
            <div>
              <h4 class="card-title">Usuarios</h4>
              <p class="card-description">Listado desde la base de datos</p>
            </div>
            <div>
              <a href="{{ route('contacts.create') }}" class="btn btn-primary">Agregar nuevo</a>
            </div>
          </div>

          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rows as $row)
                  <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>
                      <a href="{{ route('contacts.edit', $row->id) }}" class="btn btn-sm btn-info">Editar</a>

                      <form action="{{ route('contacts.destroy', $row->id) }}" method="POST" style="display:inline" onsubmit="return confirm('¿Eliminar registro?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

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