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

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="CodeFire" content="Saytou_Dashboar">

    <link rel="apple-touch-icon" href="<?php echo e(asset('apple-icon.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('vendors/themify-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/selectFX/css/cs-skin-elastic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/jqvmap/dist/jqvmap.min.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>

</head>
   <body class="<?php echo e($class ?? ''); ?>">
      
      <?php echo $__env->make('layouts.partials.nav_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>
      
      <?php if(isset($createEnquete)): ?>
         <?php echo $__env->yieldContent('enqueteForm'); ?>
      <?php elseif(isset($createUser)): ?>
         <?php echo $__env->yieldContent('usersForm'); ?>
      <?php elseif(isset($result)): ?>
         <?php echo $__env->yieldContent('liste'); ?>
      <?php endif; ?>
         <?php echo $__env->yieldContent('enqueteUpdate'); ?>

    <?php echo $__env->make('layouts.partials.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH /root/saytou/resources/views/layouts/master.blade.php ENDPATH**/ ?>