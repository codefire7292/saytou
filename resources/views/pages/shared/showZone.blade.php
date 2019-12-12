
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
	<h1 class="text-center"><u>Détails Zône</u></h1>
	<div class="row justify-content-center">
		<div class="col-6">
			<p class="text-center"><b>ADRESSE : </b>{{ $zone->nom_zone }}</p>
			<p class="text-center"><b>DEPARTEMENT :</b> {{ $zone->departement }}</p>
			<p class="text-center"><b>REGION : </b>{{ $zone->region }}</p>
			<p class="text-center"><b>COORDONNER PAR :</b> {{ $zone->Per_id }}</p>
			<a href="{{ url()->previous() }}" class="btn btn-warning btn-block">Retour</a>
			<br>
		</div>
	</div>
@endsection
