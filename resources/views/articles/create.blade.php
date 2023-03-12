@extends('layouts.panel')

@section('content')
<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Articles</h3>


        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ url('/articles/store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
            <div id="emailHelp" class="form-text">Into your name for article</div>
          </div>

          <div class="mb-3">
            <label for="s/n" class="form-label">Name</label>
            <input type="text" class="form-control" id="serialNumber" name="serialNumber" aria-describedby="nameHelp">
            <div id="sn" class="form-text">Serial Number</div>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" aria-describedby="nameHelp">
            <div id="desc" class="form-text">description</div>
          </div>


          <div class="mb-3">
            <label for="cant" class="form-label">Cantities</label>
            <input type="number" class="form-control" id="cantities" name="cantities" aria-describedby="nameHelp">
            <div id="cant" class="form-text">Into your cantities</div>
          </div>

          <div class="mb-3">
            <select class="form-control" aria-label=".form-select-lg example" name="status">
              <option selected>Select status for category</option>
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>

            </select>
          </div>


          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

      </div>

    </div>
  </div>

</div>



@endsection