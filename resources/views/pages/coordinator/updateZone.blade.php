

@extends('layouts.partials.nav')
 
@include('layouts.partials.footer')


@section('content')
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<div class="row justify-content-center">
		<div class="pull-left">
		    <div class="pl-3" role="alert">
		        <h1>{{ Str::title("Modifier L'enquête") }}.</h1>
		    </div>
		</div>

		<div class="col-9 shadow p-3 mb-5 bg-white rounded">
			<div class="col-lg-12 margin-tb">
	            <div class="pull-left">
	                <div class="alert  alert-success alert-dismissible fade show btn-sm" role="alert">
	                    <span class="badge badge-pill badge-danger"><i class="fa fa-exclamation-triangle"></i> ATTENTION !!!</span> Veuillez remplir tout les champs.
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	            </div>
	            <div class="pull-right">
	                <a class="btn btn-success rounded" href="{{ route('zone.index') }}"> Annuller</a>
	            </div>
        	</div>
			<br><br>
        	<div class="container col-5 shadow p-5 mb-5 bg-white rounded">
		<form method="POST" action="{{ route('zone.update',$zone) }}">
			@csrf
            {{ method_field('PUT') }}
			<input type="hidden" value="{{ Auth::user()->id }}" name="id_U">
		  <div class="form-group">
		    <label for="zone">Zone</label>
		    <input type="text" name="nom_zone" class="form-control" id="zone" aria-describedby="zoneHelp" value="{{ old('nom_zone')?? $zone->nom_zone }}" placeholder="Dalal diame">
		    <small id="zoneHelp" class="form-text text-muted">Veuillez renséigné la zone d'étude souhaitée.</small>
		  </div>
		  <div class="form-group">
		    <label for="departement">Département</label>
		    <input type="text" name="departement" class="form-control" id="departement" aria-describedby="depHelp" value="{{ old('departement')?? $zone->departement }}" placeholder="Bambey">
		    <small id="depHelp" class="form-text text-muted">Veuillez fournir le département concerné.</small>
		  </div>
		  <div class="form-group">
		    <label for="region">Région</label>
		    <input type="text" name="region" class="form-control" id="region" value="{{ old('region')?? $zone->region }}" placeholder="Diourbel">
		    <small id="depHelp" class="form-text text-muted">Veuillez fournir la région actuel de l'enquête.</small>
		  </div>
		  <div class="form-group"> 
			  	<button type="submit" class="btn btn-secondary btn-block rounded"><span class="fa fa-send" style="color:#4f4;"></span> Enregistrer</button>
		  </div>
		</form>
	</div>

		</div>
	</div>
@endsection
