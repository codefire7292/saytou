<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<br>

<style type="text/css">
	p{
		background-color: #DCDCDC;
		text-align: center;
	}
</style>
	<h1 class="text-center"><u>Détails Presonnel</u></h1>
	<div class="row justify-content-center">
		<div class="col-6">
			<p class="text-center"><b>NOM : </b><?php echo e($user->nom); ?></p>
			<p class="text-center"><b>PRENOM (S) :</b> <?php echo e($user->prenom); ?></p>
			<p class="text-center"><b>ADDRESSE : </b><?php echo e($user->adresse); ?></p>
			<p class="text-center"><b>DATE DE NAISSENCE :</b> <?php echo e($user->date_naissance); ?> à <?php echo e($user->VILLE); ?></p>
			<p class="text-center"><b>EMAIL : </b><?php echo e($user->email); ?></p>
			<p class="text-center"><b>PROFILE : </b><?php echo e($user->role); ?></p>
			<p class="text-center"><b>STATUT : </b><?php echo statut($user->active); ?></p>
			<a href="<?php echo e(url()->previous()); ?>" class="btn btn-warning btn-block">Retour</a>
			<br>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/shared/showUser.blade.php ENDPATH**/ ?>