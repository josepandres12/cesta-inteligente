@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a fruit</h1>

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
        <form method="post" action="{{ route('fruits.update', $fruit->idFruta) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="idFruta">ID:</label>
                <input type="text" class="form-control" name="idFruta" value={{ $fruit->idFruta }} />
            </div>

            <div class="form-group">
                <label for="nombreFruta">Name:</label>
                <input type="text" class="form-control" name="nombreFruta" value={{ $fruit->nombreFruta }} />
            </div>

            <div class="form-group">
                <label for="pesoFruta">Weight:</label>
                <input type="text" class="form-control" name="pesoFruta" value={{ $fruit->pesoFruta }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection