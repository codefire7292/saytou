
@extends('layouts.master', ['title'=> 'Acceuil'])

@include('layouts.partials.form')
@include('layouts.partials.footer')

@section('content')
<br>
	<h1>About</h1>
	<div class="row">
		<div class="col-10">
			<h3>Le Lorem Ipsum est simplement</h3>
				<p class="text-muted">
				<i class="fa fa-quote-left fa-1x fa-pull-left fa-border"></i>
					Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.	
				<i class="fa fa-quote-right fa-1x fa-pull-right fa-border"></i>
				</p>
		</div>
		<div class="col-2">
			<h5>
				Références clées
			</h5>
			ok
		</div>
	</div>
@endsection


