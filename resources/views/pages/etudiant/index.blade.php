
@extends('layouts.partials.nav')

@include('layouts.partials.footer')

@section('content')
	<h1 class="row justify-content-center">Informations personnel</h1>
	<div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('investigator/images/signup-img.jpg') }}" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="" class="register-form" id="register-form">
						<h2 class="row justify-content-center">Formulaire d'enquête</h2>
                            <div class="form-group">
                                <label for="name">Nom :</label>
                                <input type="text" value="{{ old('nom')?? $etudiant->nom }}" name="nom" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Prénom(s) :</label>
                                <input type="text" value="{{ old('prenom')?? $etudiant->prenom }}" name="prenom" id="father_name" required/>
                            </div>
                        <div class="form-group">
                            <label for="address">Adresse :</label>
                            <input type="text" value="{{ old('adresse')?? $etudiant->adresse }}" name="adresse" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Séxe :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="sexe" id="male" checked>
                                <label for="male">Homme</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Femme</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Département :</label>
                                <div class="form-select">
                                    <select name="departement" id="state">
                                        <option value=""></option>
                                        <option value="us">America</option>
                                        <option value="uk">English</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">Région :</label>
                                <div class="form-select">
                                    <select name="region" id="city">
                                        <option value=""></option>
                                        <option value="losangeles">Los Angeles</option>
                                        <option value="washington">Washington</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" value="{{ old('email')?? $etudiant->email }}" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" onclick="location.reload();" value="Annuller" class="submit" id="reset" />
                            <input type="submit" value="Valider" class="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset('investigator/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('investigator/js/main.js') }}"></script>
@endsection
