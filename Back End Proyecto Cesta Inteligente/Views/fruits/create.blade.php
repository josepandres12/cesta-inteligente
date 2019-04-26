@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a New Fruit</h1>
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
      <form method="post" action="{{ route('fruits.store') }}">
          @csrf
          <div class="form-group">    
              <label for="idFruta">ID:</label>
              <input type="text" class="form-control" name="idFruta"/>
          </div>

          <div class="form-group">
              <label for="nombreFruta">Name:</label>
              <input type="text" class="form-control" name="nombreFruta"/>
          </div>

          <div class="form-group">
              <label for="pesoFruta">Peso:</label>
              <input type="text" class="form-control" name="pesoFruta"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add Fruit</button>
      </form>
  </div>
</div>
</div>
@endsection