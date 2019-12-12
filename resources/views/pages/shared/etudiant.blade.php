
@extends('layouts.partials.nav')



@include('layouts.partials.form')
@include('layouts.partials.footer')

@section('content')
	<div class="col-lg-12 margin-tb">
	    <div class="pull-right m-1">
	        <a class="btn btn-success rounded" href="{{ route('user.create') }}"> Ajouter Etudiants(s)</a>
	    </div>
	    <div class="pull-left">
		    <div class="px-3" role="alert">
		        <h1>{{ Str::title("Liste des Etudiants") }}.</h1>
		    </div>
		</div>
    </div>
@endsection

@section('liste')
<dir class="container">
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">NOM</th>
	      <th scope="col">PRENOM(S)</th>
	      <th 	scope="col">E-MAIL</th>
	      <th class="text-center" width=15% scope="col">ACTIONS</th>
	    </tr>
	  </thead>
	  <tbody class="">
		@foreach ($result; $i = 0 as $user)
		    <tr>
		      <th scope="row">{{ ++$i }}</th>
		      <td>{{ $user->nom }}</td>
		      <td>{{ $user->prenom }}</td>
		      <td>{{ $user->email }}</td>
		      <td class="text-center" class="row justify-content-center">

		      	<a class="edit-modal btn btn-success btn-sm rounded" href="{{ route('user.show', $user->id) }}"><i class="fa fa-eye"></i></a>
		      		<a class="edit-modal btn btn-warning btn-sm rounded mx-1" href="{{ route('user.edit', $user->id) }}"><i class="fa fa-pencil"></i></a>
			      	<form action="{{ route('user.destroy',$user->id) }}" method="POST" accept-charset="utf-8" class="d-inline-block">
			      		@csrf
						{{ method_field('DELETE') }}
			      		<button type="button" class="btn btn-danger btn-sm rounded" data-original-title="" title="" onclick="confirm('{{ __("Êtes-Vous sûr de bien vouloir supprimé cet utilisateur ?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons"><i class="fa fa-trash-o"></i>
                                      <div class="ripple-container"></div>
                        </button>
			      	</form>
		      </td>
		    </tr>
		@endforeach
	  </tbody>
	</table>
	{{ $result->links() }}
</dir>
@endsection