
@extends('laywelcome')
@section('content')
<div class="container">
  <div class="row justify-content-center">
	<div class="col-8">
	  <h2 class="text-center my-3">Населенный пункт</h2>
	  <form id="regAgroForm" action="/record" method="POST">
	  	@csrf
	    <div class="input-group flex-nowrap my-2">
	      <div class="input-group-prepend">
	        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-pen-alt"></i></span>
	      </div>
	      <input type="text" class="form-control" placeholder="Название" aria-label="Username" aria-describedby="addon-wrapping" name="name" required>
	    </div>
	    <div class="input-group flex-nowrap my-2">
	      <div class="input-group-prepend">
	        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-pen-alt"></i></span>
	      </div>
	      <input type="number" class="form-control" placeholder="Широта" aria-label="Username" aria-describedby="addon-wrapping" name="latitude" required>
	    </div>
	    <div class="input-group flex-nowrap my-2">
	      <div class="input-group-prepend">
	        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-pen-alt"></i></span>
	      </div>
	      <input type="number" class="form-control" placeholder="Долгота" aria-label="Username" aria-describedby="addon-wrapping" name="longitude" required>
	    </div>
	    <div class="input-group flex-nowrap my-2">
	      <div class="input-group-prepend">
	        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-pen-alt"></i></span>
	      </div>
	      <input type="number" class="form-control" placeholder="Количество населения" aria-label="Username" aria-describedby="addon-wrapping" name="population" required>
	    </div>
	    <input type="submit" class="btn btn-block btn-primary" value="Записать">
	  </form>
	</div>
  </div>
</div>
<div class="container" style="margin-top: 1%">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Название</th>
      <th scope="col">Широта</th>
      <th scope="col">Долгота</th>
      <th scope="col">Население</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($lines as $line)
    <tr>
      <td>{{$loop->index+1}}</td>
      <td>{{$line->name}}</td>
	  <td>{{$line->latitude}}</td>
	  <td>{{$line->longitude}}</td>
	  <td>{{$line->population}}</td>
    </tr>
    @endforeach
  </tbody>
 </table>
</div>
@endsection