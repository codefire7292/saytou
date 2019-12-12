
@extends('layouts.partials.nav')


@include('layouts.partials.form')
@include('layouts.partials.footer')

@section('content')
<style type="text/css">
	p{
		background-color: #DCDCDC;
		text-align: center;
	}
</style>
<br>
	<h1 class="text-center"><u>Détails de l'enquête</u></h1>
	<div class="row justify-content-center">
		<div class="col-10">
			<p class="text-center"><b>Commendité par : </b> {{ $enquete['Com_id'] }}</p>
			<p class="text-center"><b>Créer par : </b> {{ $enquete['Adm_id'] }}</p>
			<p class="text-center"><b>MOTIF : </b>{{ $enquete['motif'] }}</p>
			<p class="text-center container p-3"><b>CONTEXE : </b>{!! $enquete['contexte'] !!}</p>
			<p class="text-center"><b>DEBUT : </b>{{ $enquete['debut'] }} --//-- <b>FIN : </b>{{ $enquete['fin'] }}</p>
			<p class="text-center"><b>COÛT : </b>{{ $enquete['cout'] }} <b>Frs CFA</b></p>
			<a href="{{ url()->previous() }}" class="btn btn-warning btn-block rounded">Retour</a>
			<br>
		</div>
	</div>
@endsection


