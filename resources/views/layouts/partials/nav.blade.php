
@if (Auth::user()->role === 'admin')
	@include('layouts.master')
@elseif (Auth::user()->role === 'coordonnateur')
	@include('layouts.app_coordinator')
@elseif (Auth::user()->role === 'commanditaire')
	@include('layouts.app_patron')
@elseif (Auth::user()->role === 'enquêteur')
	@include('layouts.app_investigator')
@elseif (Auth::user()->role === 'étudiant')
	@include('layouts.app_etudiant')
@endif
