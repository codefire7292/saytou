
@extends('layouts.partials.nav')


@include('layouts.partials.footer')

@section('content')
	<br>
	<div class="col-lg-12 margin-tb">
	    <div class="pull-right m-1">
	        <a class="btn btn-success rounded" href="{{ route('zone.create') }}"> Ajouter une Zône</a>
	    </div>
	    <div class="pull-left">
		    <div class="pl-3" role="alert">
		        <h1>{{ Str::title("Liste des Zones") }}.</h1>
		    </div>
		</div>
    </div>
@endsection

@section('liste')
	<div class="container">
		@if ($message = Session::get('success'))
	        <div class="alert alert-success">
	            <p>{{ $message }}</p>
	        </div>
    	@endif

	    <table class="table"> 
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">ADRESSE</th>
		      <th scope="col">DEPARTEMENT</th>
		      <th scope="col">REGION</th>
		      <th scope="col">COORDONNER PAR</th>
		      <th class="text-center" scope="col" width=15%>ACTIONS</th>
		    </tr>
		  </thead>
		  <tbody>
			@foreach ($result; $i=0 as $zone)
			    <tr>
			      <th scope="row">{{ ++$i }}</th>
			      <td>{{ $zone->nom_zone }}</td>
			      <td>{{ $zone->departement }}</td>
			      <td>{{ $zone->region }}</td>
			      <td>{{ $zone->Per_id }}</td>
			      <td class="row justify-content-center">
		      		<a class="edit-modal btn btn-success btn-sm rounded" href="{{ route('zone.show', $zone->id) }}"><i class="fa fa-eye"></i></a>
		      	@if(Auth::user()->role === 'coordonnateur')
		      		<a class="edit-modal btn btn-warning btn-sm rounded mx-1" href="{{ route('zone.edit', $zone->id) }}"><i class="fa fa-pencil"></i></a>
			      	<form action="{{ route('zone.destroy',$zone->id) }}" method="POST" accept-charset="utf-8" class="d-inline-block">
			      		@csrf
						{{ method_field('DELETE') }}
			      		<button type="button" class="btn btn-danger btn-sm rounded" data-original-title="" title="" onclick="confirm('{{ __("Êtes-Vous sûr de bien vouloir supprimé cet utilisateur ?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons"><i class="fa fa-trash-o"></i>
                                      <div class="ripple-container"></div>
                        </button>
			      	</form>
			    @endif
		      	  </td>
			    </tr>
    		@endforeach
		  </tbody>
		</table>
		{{ $result->links() }}
	</div>	
@endsection

