
@extends('layouts.partials.nav')
 
@section('content')
	<br>
	<div class="row justify-content-center">
		<div class="pull-left">
		    <div class="pl-3" role="alert">
		        <h1>{{ Str::title("Modifier L'utilisteur") }}.</h1>
		    </div>
		</div>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <strong>ATTENTION !</strong> SVP veuiller verifier vos données fournies<br><br>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		 @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif

    	<div class="col-10 shadow p-3 mb-5 bg-white rounded">
        	<div class="col-lg-12 margin-tb">
	            <div class="pull-left">
	                <div class="alert  alert-success alert-dismissible fade show" role="alert">
	                    <span class="badge badge-pill badge-danger">ATTENTION !!!</span> Veuillez remplir tout les champs.
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	            </div>
			    <div class="pull-right">
			        <a class="btn btn-success rounded" href="{{ url()->previous() }}">Annuler</a>
			    </div>
        	</div>
			<form method="POST" action="{{ route('user.update',$user) }}">
                        @csrf
                        {{ method_field('PUT') }}
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputName4">Nom</label>
			      <input type="text" name="nom" class="form-control" id="inputName4" placeholder="Nom" value="{{ old('nom')?? $user->nom }}">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPrenom4">Prénom</label>
			      <input type="text" name="prenom" class="form-control" id="inputPrenom4" placeholder="Prénom" value="{{ old('prenom')?? $user->prenom }}">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="codeFife@saytou.com" value="{{ old('email')?? $user->email }}">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-row">	
				  <div class="form-group col-md-6">
				    <label for="inputAddress">Addresse</label>
				    <input type="text" name="adresse" class="form-control" id="inputAddress" placeholder="Bambey" value="{{ old('addresse')?? $user->adresse }}">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="inputDate2">Date de naissance</label>
				    <input type="date" name="date_naissance" class="form-control" id="inputDate2" placeholder="02/09/2019" value="{{ old('date_naissance')?? $user->date_naissance }}">
				  </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputVille">Lieu Naissanse</label>
			      <input type="text" name="ville" class="form-control" id="inputVille" value="{{ old('VILLE')?? $user->VILLE }}">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">Qualité</label>
			      <select id="inputState" name="role" class="form-control">
			        <option selected>...Choisir...</option>
			        @if(Auth::user()->role === 'admin' )
				        <option {{ $user->role==='admin'?'selected':'' }} value="admin">Admin</option>
				        <option {{ $user->role?'selected':'' }} value="coordonnateur">Coordonnateur</option>
				        <option {{ $user->role?'selected':'' }} value="commanditaire">Commanditaire</option>
				    @elseif(Auth::user()->role === 'coordonnateur' ) 
			        	<option {{ $user->role?'selected':'' }} value="enquêteur">Enquêteur</option>
			        	<option {{ $user->role?'selected':'' }} value="étudiant">Etudiant</option>
			        @endif
			      </select>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputFile">Photo profile</label>
			      <input type="file" name="profile" class="form-control" id="inputFile">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
			      </label>
			    </div>
			  </div>
			  <div class="form-group"> 
			  	<button type="submit" class="btn btn-secondary btn-block"><span class="fa fa-send" style="color:#4f4;"></span> Enregistrer</button>
			  </div>
			</form>
		</div>
	</div>
@endsection
