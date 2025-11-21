@extends('cpanel.index')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Agregar contacto</h4>

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('tabla') }}" class="btn btn-secondary">Volver</a>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection