<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->


<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
  	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title><?php echo e(config('app.name', 'Laravel')); ?>\Coordonateur</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- BootstrapCDN -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/themify-icons/css/themify-icons.css')); ?>">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>


    <link rel="stylesheet" href="<?php echo e(asset('dispart/css/tether.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('dispart/css/form_builder.css')); ?>"/>

</head>
<body class="<?php echo e($class ?? ''); ?>">
	
		<?php echo $__env->make('layouts.partials.nav_coordinator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>		
	
		<?php echo $__env->yieldContent('content'); ?>
	
		<?php if(isset($createEnquete)): ?>
	        <?php echo $__env->yieldContent('enqueteForm'); ?>
	    <?php elseif(isset($createUser)): ?>
	        <?php echo $__env->yieldContent('usersForm'); ?>
	    <?php elseif(isset($result)): ?>
	    <dir class="">
	        <?php echo $__env->yieldContent('liste'); ?>
	    </dir>
	    <?php elseif(isset($createZone)): ?>
			<?php echo $__env->yieldContent('zoneForm'); ?>
	    <?php endif; ?>
<br>
<br>
<br>
<br>
<br>
		<?php echo $__env->yieldContent('footer'); ?>

</body>
</html><?php /**PATH /root/saytou/resources/views/layouts/app_coordinator.blade.php ENDPATH**/ ?>