
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
	<h1 class="text-center"><u>Détails Presonnel</u></h1>
	<div class="row justify-content-center">
		<div class="col-6">
			<p class="text-center"><b>NOM : </b>{{ $user->nom }}</p>
			<p class="text-center"><b>PRENOM (S) :</b> {{ $user->prenom }}</p>
			<p class="text-center"><b>ADDRESSE : </b>{{ $user->adresse }}</p>
			<p class="text-center"><b>DATE DE NAISSENCE :</b> {{ $user->date_naissance }} à {{ $user->VILLE }}</p>
			<p class="text-center"><b>EMAIL : </b>{{ $user->email }}</p>
			<p class="text-center"><b>PROFILE : </b>{{ $user->role }}</p>
			<p class="text-center"><b>STATUT : </b>{!! statut($user->active) !!}</p>
			<a href="{{ url()->previous() }}" class="btn btn-warning btn-block">Retour</a>
			<br>
		</div>
	</div>
@endsection
