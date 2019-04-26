@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a recipe</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('recipes.update', $recipe->idReceta) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="idReceta">ID:</label>
                <input type="text" class="form-control" name="idReceta" value={{ $recipe->idReceta }} />
            </div>

            <div class="form-group">
                <label for="nombreReceta">Name:</label>
                <input type="text" class="form-control" name="nombreReceta" value={{ $recipe->nombreReceta }} />
            </div>

            <div class="form-group">
                <label for="descripcionReceta">Description:</label>
                <input type="text" class="form-control" name="descripcionReceta" value={{ $recipe->descripcionReceta }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection