<?php echo $__env->make('layouts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
	p{
		background-color: #DCDCDC;
		text-align: center;
	}
</style>
<br>
	<h1 class="text-center"><u>Détails de l'enquête</u></h1>
	<div class="row justify-content-center">
		<div class="col-10">
			<p class="text-center"><b>Commendité par : </b> <?php echo e($enquete['Com_id']); ?></p>
			<p class="text-center"><b>Créer par : </b> <?php echo e($enquete['Adm_id']); ?></p>
			<p class="text-center"><b>MOTIF : </b><?php echo e($enquete['motif']); ?></p>
			<p class="text-center container p-3"><b>CONTEXE : </b><?php echo $enquete['contexte']; ?></p>
			<p class="text-center"><b>DEBUT : </b><?php echo e($enquete['debut']); ?> --//-- <b>FIN : </b><?php echo e($enquete['fin']); ?></p>
			<p class="text-center"><b>COÛT : </b><?php echo e($enquete['cout']); ?> <b>Frs CFA</b></p>
			<a href="<?php echo e(url()->previous()); ?>" class="btn btn-warning btn-block rounded">Retour</a>
			<br>
		</div>
	</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/shared/showEnquete.blade.php ENDPATH**/ ?>