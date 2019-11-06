
@section('enqueteForm')

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
		<div class="col-10 shadow p-3 mb-5 bg-white rounded">
			<form>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Motif</label>
				    <input type="text" name="intitulle" class="form-control" id="exampleFormControlInput1" placeholder="Enquéte exemple">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Montant</label>
				    <input type="number" name="cout" class="form-control" id="exampleFormControlInput1" placeholder="500 000 Fr">
				  </div>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Contexe</label>
			    <textarea class="form-control" id="editor" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
					    <label for="inputDate2">Début</label>
					    <input type="date" name="date_debut" class="form-control" id="inputDate2" placeholder="02/09/2019">
				  </div>
				  <div class="form-group col-md-6">
					    <label for="inputDate2">Fin</label>
					    <input type="date" name="date_fin" class="form-control" id="inputDate2" placeholder="02/09/2019">
				  </div>
			  </div>
			</form>
		</div>
	</div>
@endsection

@section('usersForm')
	<div class="row justify-content-center">
		 @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
    	<div class="col-10 shadow p-3 mb-5 bg-white rounded">
			<form method="POST" action="{{ route('user.store') }}">
                        @csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputName4">Nom</label>
			      <input type="text" name="nom" class="form-control" id="inputName4" placeholder="Nom">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPrenom4">Prénom</label>
			      <input type="text" name="prenom" class="form-control" id="inputPrenom4" placeholder="Prénom">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="codeFife@saytou.com">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-row">	
				  <div class="form-group col-md-6">
				    <label for="inputAddress">Addresse</label>
				    <input type="text" name="addresse" class="form-control" id="inputAddress" placeholder="Bambey">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="inputDate2">Date de naissance</label>
				    <input type="date" name="birthday" class="form-control" id="inputDate2" placeholder="02/09/2019">
				  </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputVille">Lieu Naissanse</label>
			      <input type="text" name="ville" class="form-control" id="inputVille">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">Qualité</label>
			      <select id="inputState" name="statut" class="form-control">
			        <option selected>...Choisir...</option>
			        @if(Auth::user()->is_admin == 0 )
				        <option value="0">Admin</option>
				        <option value="1">Coordonnateur</option>
				        <option value="2">commanditaire</option>
				    @elseif(Auth::user()->is_admin == 1 ) 
			        	<option value="3">Enquéteur</option>
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

@section('login')
			<div class = "entrées-group-input-lg" >
			  <span class = "entrée-group-module" >
			    <i class = " fa fa-enveloppe " > </ i>
			  </span>
			  <input class = "form-control" type = "text" placeholder = "Adresse e-mail" >
			</div>
			<div class = "groupe_entrée groupe-lg" >
			  <span class = "groupe-add-entrée" >
			    <i class = " fa fa-lock " > </ i>
			  </span>
			  <input class = "form-control" type = "password" placeholder = "Password" >
			</div>
@endsection