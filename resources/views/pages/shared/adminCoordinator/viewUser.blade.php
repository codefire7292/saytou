
@extends('layouts.partials.nav')

@include('layouts.partials.footer')

@section('content')
	<br>
	<div class="col-lg-12 margin-tb">
	@if(Auth::user()->role != 'commanditaire')
	    <div class="pull-right m-1">
	        <a class="btn btn-success rounded" href="{{ route('user.create') }}"> Ajouter User(s)</a>
	    </div>
	@endif
	    <div class="pull-left">
		    <div class="pl-3" role="alert">
		        <h1>{{ Str::title("Liste des Utilisateurs") }}.</h1>
		    </div>
		</div>
    </div>
@endsection

@section('liste')
		@if ($message = Session::get('success'))
	        <div class="alert alert-success">
	            <p>{{ $message }}</p>
	        </div>
    	@endif


<div class="col-12 card">
    <header class="card-header">
            <p class="card-header-title">USERS</p>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('user.index') }}" @unless($role) selected @endunless>Toutes roles</option>
                    @foreach($profil as $x)
                        <option value="{{ route('user.index', $x->role) }}" {{ $role == $x->role ? 'selected' : '' }}>{{ $x->role }}</option>
                    @endforeach
                </select>
            </div>
            
        </header>
</dir>



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
		      <th class="text-center" scope="col" width=15%>ACTIONS</th>
		    </tr>
		  </thead>
		  <tbody>
			@foreach ($result; $i=0 as $user)
			    <tr>
			      <th scope="row">{{ ++$i }}</th>
			      <td>{{ $user->nom }}</td>
			      <td>{{ $user->prenom }}</td>
			      <td>{{ $user->adresse }}</td>
			      <td>{{ $user->date_naissance }}</td>
			      <td>{{ Str::limit($user->email, 23) }}</td>
			      <td>{{ str::ucfirst($user->role) }}</td>
			      <td class="text-center"  class="row justify-content-center">
		      		<a class="edit-modal btn btn-success btn-sm rounded" href="{{ route('user.show', $user->id) }}"><i class="fa fa-eye"></i></a>
		      	@if(Auth::user()->role === 'admin' || $user->role === "enquêteur" || $user->role === "étudiant")
		      		<a class="edit-modal btn btn-warning btn-sm rounded mx-1" href="{{ route('user.edit', $user->id) }}"><i class="fa fa-pencil"></i></a>
			      	<form action="{{ route('user.destroy',$user->id) }}" method="POST" accept-charset="utf-8" class="d-inline-block">
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

