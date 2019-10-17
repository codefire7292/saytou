
@extends('layouts.master', ['title'=> 'Acceuil'])

@include('layouts.partials.footer')
@include('layouts.partials.footer')

@section('content')
	<br>
	<h1>Acceuil</h1>
	Bonjour
@endsection

@section('infobule')
	<div class="container">
	<!-- Button trigger modal --> 
	<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ButtonModal">Valider</button>	 
	<!-- Modal -->
	<div class="modal fade" id="ButtonModal" tabindex="-1" role="dialog" aria-labelledby="ButtonModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="ButtonModalLabel">Attention !!!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">Êtes Vous sur de vouloir faire ceci ?</div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Valider</button>
	        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Supprimer</button>
	        <button type="button" class="btn btn-outline-info ">Annuler</button>
	        <button type="button" class="btn btn-warning ">Abort</button>
	      </div>
	    </div>
	  </div>
	</div> 
	</div>
@endsection
