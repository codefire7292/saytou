<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}\Admin</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- BootstrapCDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Ckeditor -->
	<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>

<!-- Boutton return head -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


<style>
.cRetour {
  border-radius:3px;
  padding:10px;
  font-size:15px;
  text-align:center;
  color:#fff;
  background:rgba(0, 0, 0, 0.25);
  z-index:99999;
  transition:all ease-in 0.2s;
  position: fixed;
  cursor: pointer;
  bottom: 8em;
  right: 20px;
  display: none;
}
.cRetour:before{ content: "\25b2"; }
.cRetour:hover{
  background:rgba(0, 0, 0, 1);
  transition:all ease-in 0.2s;
  border-radius: 70px 70px 50px 50px;
}
</style>

<script>            
jQuery(document).ready(function() {
  var duration = 500;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 80) {
      // Si un défillement de 80 pixels ou plus.
      // Ajoute le bouton
      jQuery('.cRetour').fadeIn(duration);
    } else {
      // Sinon enlève le bouton
      jQuery('.cRetour').fadeOut(duration);
    }
  });
				
  jQuery('.cRetour').click(function(event) {
    // Un clic provoque le retour en haut animé.
    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
});
</script>

<div class="cRetour"></div>


</head>
<body>
	<header  class="flex-column flex-md-row bd-navbar">
		@include('layouts.partials.nav')
	</header>
		<div class="container" style="border: 1px solid silver; margin-bottom: 10em">
			@yield('content')

			@if (isset($createUser))
				@yield('usersForm')
			@elseif(isset($createEnquete))
				@yield('enqueteForm')
			@endif

			@yield('liste')

		</div>
			@yield('footer')





	<div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        window.onscroll = function(ev) {
          document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
        };
      });
    </script>

    <script>
        ClassicEditor
           .create( document.querySelector( '#editor' ) )
           .then( editor => {
           		console.log( editor );
                            } ).catch( error => {
                                console.error( error );
                            } );
    </script>
</body>
</html>