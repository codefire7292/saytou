
@section('enqueteForm')

	<div class="row justify-content-center">
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
		<div class="col-10 shadow p-3 mb-5 bg-white rounded">
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
	                <a class="btn btn-success rounded" href="{{ route('enquete.index') }}"> Lister Enquêtes</a>
	            </div>
        	</div>
			<form method="POST" action="{{ route('enquete.store') }}">
				@csrf
				<input type="hidden" name="id" value={{ Auth::user()->id }}>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Motif</label>
				    <input type="text" name="motif" class="form-control" id="exampleFormControlInput1" placeholder="Enquéte exemple" value="{{ old('motif') }}">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Montant</label>
				    <input type="number" name="cout" class="form-control" id="exampleFormControlInput1" placeholder="500 000 Fr" value="{{ old('cout') }}">
				  </div>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Contexte</label>
			    <textarea name="contexte" class="form-control" id="editor" id="exampleFormControlTextarea1" rows="3" >{{ old('contexte') }}</textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
					    <label for="inputDate2">Début</label>
					    <input type="datetime-local" name="debut" class="form-control" id="inputDate2" placeholder="02/09/2019" value="{{ old('debut') }}">
				  </div>
				  <div class="form-group col-md-6">
					    <label for="inputDate2">Fin</label>
					    <input type="datetime-local" name="fin" class="form-control" id="inputDate2" placeholder="02/09/2019" value="{{ old('fin') }}">
				  </div>
			  </div>
			  <div class="form-group"> 
			  	<button type="submit" class="btn btn-secondary btn-block rounded"><span class="fa fa-send" style="color:#4f4;"></span> Enregistrer</button>
			  </div>
			</form>
		</div>
	</div>
@endsection

	

@section('usersForm')
	<div class="row justify-content-center">

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
	                <div class="alert  alert-success alert-dismissible fade show btn-sm" role="alert">
	                    <span class="badge badge-pill badge-danger"><i class="fa fa-exclamation-triangle"></i> ATTENTION !!!</span> Veuillez remplir tout les champs.
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	            </div>
		        <div class="pull-right">
		            <a class="btn btn-success rounded" href="{{ route('user.index') }}"> Lister Users</a>
		        </div>
	        </div>
	        @if(Auth::user()->role != 'admin' )
	        	<br><br><br>
	        @endif
	        <div class="">
			<form enctype="multipart/form-data" method="POST" action="{{ route('user.store') }}">
                        @csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputName4">Nom</label>
			      <input type="text" name="nom" class="form-control" id="inputName4" placeholder="Nom" value="{{ old('nom') }}">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPrenom4">Prénom</label>
			      <input type="text" name="prenom" class="form-control" id="inputPrenom4" placeholder="Prénom" value="{{ old('prenom') }}">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="codeFife@saytou.com" value="{{ old('email') }}">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-row">	
				  <div class="form-group col-md-6">
				    <label for="inputAddress">Addresse</label>
				    <input type="text" name="adresse" class="form-control" id="inputAddress" placeholder="Bambey" value="{{ old('adresse') }}">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="inputDate2">Date de naissance</label>
				    <input type="date" name="date_naissance" class="form-control" id="inputDate2" placeholder="02/09/2019" value="{{ old('date_naissance') }}">
				  </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputVille">Lieu Naissanse</label>
			      <input type="text" name="ville" class="form-control" id="inputVille" value="{{ old('ville') }}">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">Qualité</label>
			      <select id="inputState" name="role" class="form-control">
			        <option selected>...Choisir...</option>
			        @if(Auth::user()->role === 'admin' )
				        <option value="admin">Admin</option>
				        <option value="coordonnateur">Coordonnateur</option>
				        <option value="commanditaire">Commanditaire</option>
				    @elseif(Auth::user()->role === 'coordonnateur' ) 
			        	<option value="enquêteur">Enquêteur</option>
			        	<option value="étudiant">Etudiant</option>
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
			  	<button type="submit" class="btn btn-secondary btn-block rounded"><span class="fa fa-send" style="color:#4f4;"></span> Enregistrer</button>
			  </div>
			</form>
		</div>
	 </div>
	</div>
@endsection

@section('zoneForm')

	@if ($message = Session::get('error'))
            <div class="alert alert-danger">
            <p>{!! $message !!}</p>
        </div>
	@endif

	@if ($message = Session::get('success'))
	        <div class="container alert alert-success">
	            <p class="text-center">{{ $message }}</p>
	        </div>
    @endif

	@if ($errors->any())
		    <div class="container alert alert-danger">
		        <strong>ATTENTION !</strong> SVP veuiller verifier vos données fournies<br><br>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	<div class="container col-5 shadow p-5 mb-5 bg-white rounded">
		<form method="POST" action="{{ route('zone.store') }}">
			@csrf
			<input type="hidden" value="{{ Auth::user()->id }}" name="id_U">
		  <div class="form-group">
		    <label for="zone">Zone</label>
		    <input type="text" name="nom_zone" class="form-control" id="zone" aria-describedby="zoneHelp" placeholder="Dalal diame">
		    <small id="zoneHelp" class="form-text text-muted">Veuillez renséigné la zone d'étude souhaitée.</small>
		  </div>
		  <div class="form-group">
		    <label for="departement">Département</label>
		    <input type="text" name="departement" class="form-control" id="departement" aria-describedby="depHelp" placeholder="Bambey">
		    <small id="depHelp" class="form-text text-muted">Veuillez fournir le département concerné.</small>
		  </div>
		  <div class="form-group">
		    <label for="region">Région</label>
		    <input type="text" name="region" class="form-control" id="region" placeholder="Diourbel">
		    <small id="depHelp" class="form-text text-muted">Veuillez fournir la région actuel de l'enquête.</small>
		  </div>
		  <div class="form-group"> 
			  	<button type="submit" class="btn btn-secondary btn-block rounded"><span class="fa fa-send" style="color:#4f4;"></span> Enregistrer</button>
		  </div>
		</form>
	</div>
@endsection

@section('login')
			<div class = "entrées-group-input-lg" >
			  <span class = "entrée-group-module" >
			    <i class = " fa fa-enveloppe " > </ i>
			  </span>
			  <input class = "form-control" type = "text" placeholder = "Adresse e-mail">
			</div>
			<div class = "groupe_entrée groupe-lg" >
			  <span class = "groupe-add-entrée" >
			    <i class = " fa fa-lock " > </ i>
			  </span>
			  <input class = "form-control" type = "password" placeholder = "Password" >
			</div>
@endsection