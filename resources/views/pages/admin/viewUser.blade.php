
@extends('layouts.master', ['title'=> 'Acceuil'])

@include('layouts.partials.form')
@include('layouts.partials.footer')

@section('content')
	<br>
	<h1>Liste des Utilisateurs</h1>
@endsection

@section('liste')
	    <table class="table"> 
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">NOM</th>
		      <th scope="col">PRENOM(S)</th>
		      <th scope="col">ADRESSE</th>
		      <th scope="col">BIRTHDAY</th>
		      <th scope="col">E-MAIL</th>
		      <th scope="col">STATUT</th>
		      <th scope="col">ACTIONS</th>
		    </tr>
		  </thead>
		  <tbody>
			@foreach ($result as $user)
			    <tr>
			      <th scope="row">{{ $user->id }}</th>
			      <td>{{ $user->nom }}</td>
			      <td>{{ $user->prenom }}</td>
			      <td>{{ $user->adresse }}</td>
			      <td>{{ $user->date_naissance }}</td>
			      <td>{{ $user->email }}</td>
			      <td>{{ $user->is_admin }}</td>
			      <td>
		      		<button type="button" class="btn btn-success">Détails</button>
		      		<button type="button" class="btn btn-warning">Edit</button>
		      		<button type="button" class="btn btn-danger">Delete</button>
		      	  </td>
			    </tr>
    		@endforeach
		  </tbody>
		</table>
@endsection
