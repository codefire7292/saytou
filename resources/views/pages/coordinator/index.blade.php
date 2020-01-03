
@extends('layouts.partials.nav')

@include('layouts.partials.footer')

@section('content')
	<br>
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
                @foreach ($enquete; $i = 0 as $enquete)
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
    <div class="card example-1 square scrollbar-cyan bordered-cyan">
      <div class="card-body">
        <h4 id="section1"><strong>Liste des participants</strong></h4>
        <p>
            <table class="table table-hover"> 
              <thead class="table-warning">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NOM</th>
                  <th scope="col">PRENOM(S)</th>
                  <th scope="col">E-MAIL</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users; $i=0 as $user)
                    <tr>
                      <th scope="row">{{ ++$i }}</th>
                      <td>{{ $user->nom }}</td>
                      <td>{{ $user->prenom }}</td>
                      <td>{{ Str::limit($user->email, 23) }}</td>
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

<!-- Grid row -->
<div class="row">

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

  <!-- Grid column -->
  <div class="col-md-6">

    <!-- Exaple 1 -->
    <div class="card example-1 square scrollbar-dusty-grass square thin">
      <div class="card-body">
        <h4 id="section1"><strong>Liste des enqêtés</strong></h4>
        <p>
           <table class="table table-hover"> 
              <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NOM</th>
                  <th scope="col">PRENOM(S)</th>
                  <th scope="col">DATE ENQUÊTER</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($enqueter; $i=0 as $user)
                    <tr>
                      <th scope="row">{{ ++$i }}</th>
                      <td>{{ $user->nom }}</td>
                      <td>{{ $user->prenom }}</td>
                      <td>{{ $user->date }}</td>
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










    <div class="container shadow p-5 mb-5 bg-white">
  <div class="row">
    <div class="col shadow p-5 mb-5 bg-info mr-3">
      1 of 2
    </div>
    <div class="col shadow p-5 mb-5 bg-success">
      2 of 2
    </div>
  </div>
</div>




  <div class="container shadow p-5 mb-5 bg-white">
            <h1>Acceuil</h1>
            Bienvenue cher Coordinateur
            <nav class="navbar navbar-light  bg-faded fixed-top">
                <div class="clearfix">
                    <div class="container">
                        <button style="cursor: pointer;display: none" class="btn btn-info export_html mt-2 pull-right">Export HTML</button>
                        <h3 class="mr-auto">Drag & Drop Bootstrap Form Builder</h3>
                    </div>
                </div>
            </nav>
            <br/>
            <div class="clearfix"></div>
            <div class="form_builder" style="margin-top: 25px">
                <div class="row">
                    <div class="col-sm-2 shadow bg-info">
                        <nav class="nav-sidebar">
                            <ul class="nav">
                                <li class="form_bal_textfield">
                                    <a href="javascript:;">Text Field <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_textarea">
                                    <a href="javascript:;">Text Area <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_select">
                                    <a href="javascript:;">Select <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_radio">
                                    <a href="javascript:;">Radio Button <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_checkbox">
                                    <a href="javascript:;">Checkbox <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_email">
                                    <a href="javascript:;">Email <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_number">
                                    <a href="javascript:;">Number <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_password">
                                    <a href="javascript:;">Password <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_date">
                                    <a href="javascript:;">Date <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_button">
                                    <a href="javascript:;">Button <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-5 bal_builder">
                        <div class="form_builder_area"></div>
                    </div>
                    <div class="col-md-5 shadow">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class="preview"></div>
                                <div style="display: none" class="form-group plain_html"><textarea rows="50" class="form-control"></textarea></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="dispart/js/jquery.min.js"></script>
        <script src="dispart/js/jquery-ui.min.js"></script>
        <script src="dispart/js/tether.min.js"></script>
        <script src="dispart/js/bootstrap.min.js"></script>
        <script src="dispart/js/form_builder.js"></script>



@endsection
