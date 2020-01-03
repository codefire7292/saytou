
@extends('layouts.partials.nav')

@include('layouts.partials.footer')

@section('content') 
<div class="col-9 ml-5">    
    <div class = "container shadow p-5 mb-5 bg-white">
        <div class = "row justify-content-center">
            @php    
                if (file_exists('images/avatar/'.Auth::user()->id.'.jpg')) {
                    $file = 'images/avatar/'.Auth::user()->id.'.jpg';
                }else{
                    $file = 'images/avatar/default.jpg';
                }
            @endphp
            <img src="{{ $file }}" style = "width : 150px; height : 150px; float : left; border-radius : 50%; margin-right : 25px;"/>
            <h2>Profil de {{ $user->nom }} {{ $user->prenom }}</h2> 
                <label>Mettre à jour l'image de profil</label><br>
                <input type = "file" name = "avatar">
        </div>
        <div class="row justify-content-center">
                <div class="col-10">
                    <p class=""><b>NOM : </b>{{ $user->nom }}</p>
                    <p class=""><b>PRENOM (S) :</b> {{ $user->prenom }}</p>
                    <p class=""><b>ADDRESSE : </b>{{ $user->adresse }}</p>
                    <p class=""><b>DATE DE NAISSENCE :</b> {{ $user->date_naissance }} à {{ $user->VILLE }}</p>
                    <p class=""><b>EMAIL : </b>{{ $user->email }}</p>
                    <p class=""><b>PROFILE : </b>{{ $user->role }}</p>
                    <p class=""><b>STATUT : </b>{!! statut($user->active) !!}</p>
                    <form enctype = "multipart/form-data" action = "{{ route('update_avatar_path') }}" method = "POST">
                         @csrf
                        <input type = "submit" class = "btn btn btn-primary btn-block rounded">
                    </form>
                    <br>
                </div>
        </div>
    </div>
 </div> 
@endsection


