
@if (Auth::user()->is_admin == 0)
	@include('layouts.partials.nav_admin')
@elseif (Auth::user()->is_admin == 1)
	@include('layouts.partials.nav_coordinator')
@elseif (Auth::user()->is_admin == 2)
	@include('layouts.partials.nav_patron')
@else
	@include('layouts.partials.nav_coordinator')
@endif