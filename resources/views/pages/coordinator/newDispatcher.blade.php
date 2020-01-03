
@extends('layouts.partials.nav')

@include('layouts.partials.form')

@section('content')
	<h1 class="row justify-content-center">Répartir des affectations</h1>
	<br>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>



	<style type="text/css" media="screen">
    .scrollbar-deep-purple::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

    .scrollbar-deep-purple::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

    .scrollbar-deep-purple::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #512da8; }

    .scrollbar-cyan::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

    .scrollbar-cyan::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

    .scrollbar-cyan::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #00bcd4; }

    .scrollbar-dusty-grass::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

    .scrollbar-dusty-grass::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

    .scrollbar-dusty-grass::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
    background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); }

    .scrollbar-ripe-malinka::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

    .scrollbar-ripe-malinka::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

    .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); }

    .bordered-deep-purple::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #512da8; }

    .bordered-deep-purple::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none; }

    .bordered-cyan::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #00bcd4; }

    .bordered-cyan::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none; }

    .square::-webkit-scrollbar-track {
    border-radius: 0 !important; }

    .square::-webkit-scrollbar-thumb {
    border-radius: 0 !important; }

    .thin::-webkit-scrollbar {
    width: 6px; }

    .example-1 {
    position: relative;
    overflow-y: scroll;
    height: 200px; }
</style>


        <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-6 mb-4">

    <!-- Exaple 1 -->
    <div class="card example-1 scrollbar-ripe-malinka">
      <div class="card-body">
        <h4 id="section1"><strong>Liste des enquêtes</strong></h4>
        <p> 
            <table class="table table-hover">
              <thead class="table-info">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NOM ENQUETE</th>
                  <th scope="col">COÛT</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($enquetes; $i = 0 as $enquete)
                    <tr>
                      <th scope="row">{{ ++$i }}</th>
                      <td>{{ $enquete->motif }}</td>
                      <td>{{ $enquete->cout }} Frs</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </p>
      </div>
    </div>
    <!-- Exaple 1 -->

  </div>
  <!-- Grid column -->

 


<!-- Grid column -->
  <div class="col-md-6 mb-4">

    <!-- Exaple 1 -->
    <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">
      <div class="card-body">
        <h4 id="section1"><strong>Liste des zônes</strong></h4>
        <p>
            <table class="table table-hover"> 
              <thead class="bg-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ADRESSE</th>
                  <th scope="col">DEPARTEMENT</th>
                  <th scope="col">REGION</th>
                  <th scope="col">COORDONNER PAR</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($zones; $i=0 as $zone)
                    <tr>
                      <th scope="row">{{ ++$i }}</th>
                      <td>{{ $zone->nom_zone }}</td>
                      <td>{{ $zone->departement }}</td>
                      <td>{{ $zone->region }}</td>
                      <td>{{ $zone->nom }} {{ $zone->prenom }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </p>
      </div>
    </div>
    <!-- Exaple 1 -->

  </div>
  <!-- Grid column -->


</div>
<!-- Grid row -->
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

		@if ($message = Session::get('success'))
	        <div class="alert alert-success">
	            <p>{{ $message }}</p>
	        </div>
    	@endif
<!-- Grid row -->
<div class="row justify-content-center">
	 <!-- Grid column -->
  <div class="col-md-10 mb-1">

    <!-- Exaple 1 -->
	    <div class="card example-1 square scrollbar-cyan bordered-cyan">
	      <div class="card-body">
	        <h4 id="section1"><strong>Liste des participants</strong></h4>
	        <p>
	            <table class="table table-hover justify-content-center"> 
	              <thead class="table-warning">
	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">PROFILE</th>
	                  <th scope="col">NOM</th>
	                  <th scope="col">PRENOM(S)</th>
	                  <th scope="col">ADRESSE</th>
	                  <th scope="col">E-MAIL</th>
	                  <th scope="col" class="text-center" colspan="3" width=15%>AFFECTATION</th>
	                </tr>
	              </thead>
	              <tbody>
	                @foreach ($users; $i=0 as $user)
	                	@php    
			                if (file_exists('images/avatar/'.$user->id.'.jpg')) {
			                    $file = 'images/avatar/'.$user->id.'.jpg';
			                }else{
			                    $file = 'images/avatar/default.jpg';
			                }
		            	@endphp
	                    <tr>
    <form action="{{ route('affectation.store') }}" method="POST" accept-charset="utf-8">
    	@csrf
    	<input type="hidden" value="{{ $user->id }}" name="Per_id" required/>
	                      <th scope="row">{{ ++$i }}</th>
	                      <td class="text-center"><img style="width: 40px; height: 40px;" class="rounded-circle" src="{{ $file }}" alt="User Avatar"></td>
	                      <td>{{ $user->nom }}</td>
	                      <td>{{ $user->prenom }}</td>
	                      <td>{{ $user->adresse }}</td>
	                      <td>{{ Str::limit($user->email, 20) }}</td>
	                @foreach ($if_affect as $affect)
	                	@if($affect->id != $user->id)
	                      <td width=7%>
	                       	  <select class="selectpicker col-sm" name="enquete" data-style="btn-info" multiple data-max-options="1" data-live-search="true">
							    <optgroup label="Enquête">
							@foreach ($enquetes as $enquete)
							      <option value="{{ $enquete->id }}">{{ $enquete->motif }}</option>
							@endforeach
							    </optgroup>
							  </select>
	                      </td>
	                      <td width=7%>
							  <select class="selectpicker col-sm" name="zone" data-style="btn-info" multiple data-max-options="1" data-live-search="true">
							  	<optgroup label="Zone">
							@foreach ($zones as $zone)
							      <option value="{{ $zone->id }}">{{ $zone->nom_zone }}</option>
							@endforeach
							    </optgroup>
							  </select>

							  <!-- Button trigger modal -->
	<a type="button" href="{{ route('user.show', $user->id) }}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a>

	                      </td>
	                      <td width=7%>
	                      	<button type="submit" class="btn btn-success btn-block rounded"><span class="fa fa-send" style="color:#4f4;"></span></button>
	                      </td>
	                	@else
	                		<td colspan="3" class="text-center"><a href="{{ route('user.show', $user->id) }}"><span class="fa fa-toggle-on" style="color:#4f4;"> Affecter</span></a></td>
	                	@endif
    </form>
	                    </tr>
	                @endforeach
	              	</tbody>
	                @endforeach
	            </table>
	        </p>
	       </div>
	    </div>
	    <br>
	    
    <!-- Exaple 1 -->

  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
@endsection
