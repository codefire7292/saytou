
@extends('layouts.master', ['title'=> 'Acceuil'])
 
@include('layouts.partials.form')
@include('layouts.partials.footer')

@section('content')
	<br>
	<h1>Liste des Enquêtes</h1>
@endsection

@section('liste')
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">NOM ENQUETE</th>
	      <th scope="col">DEBUT</th>
	      <th scope="col">FIN</th>
	      <th scope="col">COÛT</th>
	      <th scope="col">ACTIONS</th>
	    </tr>
	  </thead>
	  <tbody>
		@foreach ($result as $user)
		    <tr>
		      <th scope="row">{{ $user->id }}</th>
		      <td>{{ $user->nom }}</td>
		      <td>{{ $user->debut }}</td>
		      <td>{{ $user->fin }}</td>
		      <td>{{ $user->cout }}</td>
		      <td width=25%>
		      	<button type="button" class="btn btn-success">Détails</button>
		      	<button type="button" class="btn btn-warning">Edit</button>
		      	<button type="button" class="btn btn-danger">Delete</button>
		      </td>
		    </tr>
		@endforeach
	  </tbody>
	</table>
@endsection