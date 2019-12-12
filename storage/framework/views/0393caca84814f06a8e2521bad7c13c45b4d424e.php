


<?php echo $__env->make('layouts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
	<br>
	<h1>Créer un nouveau utilisateur</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', ['title'=> 'Acceuil'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/newUser.blade.php ENDPATH**/ ?>