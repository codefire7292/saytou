<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Demo-{ $title or 'no thank' }}</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- BootstrapCDN -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>

</head>
<body>
	<header  class="flex-column flex-md-row bd-navbar">
		<?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</header>
	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>

		<?php if(isset($createUser)): ?>
			<?php echo $__env->yieldContent('usersForm'); ?>
		<?php elseif(isset($createEnquete)): ?>
			<?php echo $__env->yieldContent('enqueteForm'); ?>
		<?php endif; ?>

		<?php echo $__env->yieldContent('footer'); ?>

	</div>


	<script>
        CKEDITOR.replace( 'editor1' );
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
</html><?php /**PATH C:\xampp\htdocs\saytou\resources\views/layouts/master.blade.php ENDPATH**/ ?>