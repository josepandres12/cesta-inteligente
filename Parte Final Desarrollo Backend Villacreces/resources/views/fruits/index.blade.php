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
    <h1 class="display-3">Fruits</h1> 
	<div>
		<a style="margin: 19px;" href="{{ route('fruits.create')}}" class="btn btn-primary">New Fruit</a>
    </div>  	
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Weight</td>
        </tr>
    </thead>
    <tbody>
        @foreach($fruits as $fruit)
        <tr>
            <td>{{$fruit->idFruta}}</td>
            <td>{{$fruit->nombreFruta}}</td>
            <td>{{$fruit->pesoFruta}}</td>
            <td>
                <a href="{{ route('fruits.edit',$fruit->idFruta)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('fruits.destroy', $fruit->idFruta)}}" method="post">
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