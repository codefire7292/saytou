

@extends('layouts.partials.nav')
 
@include('layouts.partials.footer')


@section('enqueteUpdate')
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
	                <a class="btn btn-success rounded" href="{{ route('enquete.index') }}"> Annuller</a>
	            </div>
        	</div>
			<form method="POST" action="{{ route('enquete.update',$enquete) }}">
						@csrf
						{{ method_field('PUT') }}
				<input type="hidden" name="id" value={{ Auth::user()->id }}>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Motif</label>
				    <input type="text" name="motif" class="form-control" id="exampleFormControlInput1" placeholder="Enquéte exemple" value="{{ old('motif')?? $enquete->motif }}">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Montant</label>
				    <input type="number" name="cout" class="form-control" id="exampleFormControlInput1" placeholder="500 000 Fr" value="{{ old('cout')?? $enquete->cout }}">
				  </div>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Contexte</label>
			    <textarea name="contexte" class="form-control" id="editor" id="exampleFormControlTextarea1" rows="3" >{!! old('contexte')?? $enquete->contexte !!}</textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
					    <label for="inputDate2">Début</label>
					    <input type="datetime-local" name="debut" class="form-control" id="inputDate2" placeholder="02/09/2019" value="{!! old('debut')?? $enquete->debut !!}">
				  </div>
				  <div class="form-group col-md-6">
					    <label for="inputDate2">Fin</label>
					    <input type="datetime-local" name="fin" class="form-control" id="inputDate2" placeholder="02/09/2019" value="{{ old('fin')?? $enquete->fin }}">
				  </div>
			  </div>
			  <div class="form-group"> 
			  	<button type="submit" class="btn btn-secondary btn-block"><span class="fa fa-send" style="color:#4f4;"></span> Enregistrer</button>
			  </div>
			</form>
		</div>
	</div>
@endsection
