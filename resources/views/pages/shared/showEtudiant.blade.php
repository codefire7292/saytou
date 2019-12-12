
@extends('layouts.partials.nav')

@include('layouts.partials.form')
@include('layouts.partials.footer')

@section('content')
<br>

<style type="text/css">
	p{
		background-color: #DCDCDC;
		text-align: center;
	}
</style>
	<h1 class="text-center"><u>Détails de l'Etudiant</u></h1>
	<div class="row justify-content-center">
		<div class="col-6">
			<p class="text-center"><b>NOM : </b>{{ $etudiant->nom }}</p>
			<p class="text-center"><b>PRENOM (S) :</b> {{ $etudiant->prenom }}</p>
			<p class="text-center"><b>ADDRESSE : </b>{{ $etudiant->adresse }}</p>
			<p class="text-center"><b>DATE DE NAISSENCE :</b> {{ $etudiant->date_naissance }}</p>
			<p class="text-center"><b>EMAIL : </b>{{ $etudiant->email }}</p>
			<p class="text-center"><b>STATUS : </b>{{ $etudiant->is_active }}</p>
			<a href="{{ url()->previous() }}" class="btn btn-warning btn-block">Retour</a>
			<br>
		</div>
	</div>
@endsection
