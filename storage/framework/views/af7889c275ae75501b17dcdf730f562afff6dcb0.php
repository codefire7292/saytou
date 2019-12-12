<?php echo $__env->make('layouts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
	<h1>Liste des Etudiants</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', ['title'=> 'Acceuil'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saytou\resources\views/pages/etudiant.blade.php ENDPATH**/ ?>