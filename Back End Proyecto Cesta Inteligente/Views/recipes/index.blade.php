@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
    <h1 class="display-3">Recipes</h1> 
	<div>
		<a style="margin: 19px;" href="{{ route('recipes.create')}}" class="btn btn-primary">New Recipe</a>
    </div>  	
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
        </tr>
    </thead>
    <tbody>
        @foreach($recipes as $recipe)
        <tr>
            <td>{{$recipe->idReceta}}</td>
            <td>{{$recipe->nombreReceta}}</td>
            <td>{{$recipe->descripcionReceta}}</td>
            <td>
                <a href="{{ route('recipes.edit',$recipe->idReceta)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('recipes.destroy', $recipe->idReceta)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection