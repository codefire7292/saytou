
@extends('layouts.master', ['title'=> 'Acceuil'])

@include('layouts.partials.form')
@include('layouts.partials.footer')

@section('content')
	<br>
	<h1>Votre page d'aide {{ Auth::user()->is_admin }}</h1>
@endsection
