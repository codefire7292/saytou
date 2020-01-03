
@extends('layouts.partials.nav')

@section('content')
    <div class="main">
        <div class="container">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <p>{!! $message !!}</p>
                </div>
            @endif
             @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{!! $message !!}</p>
                </div>
            @endif

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
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('investigator/images/signup-img.jpg') }}" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="{{ route('enqueter.store') }}" class="register-form" id="register-form">
                        @csrf

                        <input type="hidden" value="{{ date('Y-m-d H:i:s') }}" name="date" required/>
                        <input type="hidden" value="{{ Auth::user()->id }}" name="Per_id" required/>
						<h2 class="row justify-content-center">Formulaire d'enquête</h2>
                            <div class="form-group">
                                <label for="name">Nom :</label>
                                <input type="text" name="nom" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Prénom(s) :</label>
                                <input type="text" name="prenom" id="father_name" required/>
                            </div>
                        <div class="form-group">
                            <label for="address">Adresse :</label>
                            <input type="text" name="adresse" id="address" required/>
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
                            <input type="email" name="email" id="email" />
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
