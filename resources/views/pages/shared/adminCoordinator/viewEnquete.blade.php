
@extends('layouts.partials.nav')
 
@include('layouts.partials.form')

@include('layouts.partials.footer')

@section('content')
	<br>
		<div class="col-lg-12 margin-tb">
	@if(Auth::user()->role === 'admin')
	    <div class="pull-right m-1">
	        <a class="btn btn-success rounded" href="{{ route('enquete.create') }}"> Ajouter Enquête</a>
	    </div>
	@endif
	    <div class="pull-left">
		    <div class="pl-3" role="alert">
		        <h1>{{ Str::title("Liste des Enquêtes") }}.</h1>
		    </div>
		</div>
    </div>
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
	      <th class="text-center" width=15% scope="col">ACTIONS</th>
	    </tr>
	  </thead>
	  <tbody>
		@foreach ($result; $i = 0 as $enquete)
		    <tr>
		      <th scope="row">{{ ++$i }}</th>
		      <td>{{ $enquete->motif }}</td>
		      <td>{{ $enquete->debut }}</td>
		      <td>{{ $enquete->fin }}</td>
		      <td>{{ $enquete->cout }}</td>
		      <td class="text-center" class="row justify-content-center">
		      <a class="edit-modal btn btn-success btn-sm rounded" href="{{ route('enquete.show', $enquete->id) }}"><i class="fa fa-eye"></i></a>
		    @if(Auth::user()->role === 'admin')
		      		<a class="edit-modal btn btn-warning btn-sm rounded mx-1" href="{{ route('enquete.edit', $enquete->id) }}"><i class="fa fa-pencil"></i></a>
			      	<form action="{{ route('enquete.destroy',$enquete->id) }}" method="POST" accept-charset="utf-8" class="d-inline-block">
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
@endsection