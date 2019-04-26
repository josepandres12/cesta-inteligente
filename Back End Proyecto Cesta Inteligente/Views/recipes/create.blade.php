@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a New Recipe</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('recipes.store') }}">
          @csrf
          <div class="form-group">    
              <label for="idReceta">ID:</label>
              <input type="text" class="form-control" name="idReceta"/>
          </div>

          <div class="form-group">
              <label for="nombreReceta">Name:</label>
              <input type="text" class="form-control" name="nombreReceta"/>
          </div>

          <div class="form-group">
              <label for="descripcionReceta">Description:</label>
              <input type="text" class="form-control" name="descripcionReceta"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add Recipe</button>
      </form>
  </div>
</div>
</div>
@endsection