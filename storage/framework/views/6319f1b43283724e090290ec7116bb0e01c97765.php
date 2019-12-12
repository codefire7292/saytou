<?php echo $__env->make('layouts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<br>

<style type="text/css">
	p{
		background-color: #DCDCDC;
		text-align: center;
	}
</style>
	<h1 class="text-center"><u>Détails de l'Etudiant</u></h1>
	<div class="row justify-content-center">
		<div class="col-6">
			<p class="text-center"><b>NOM : </b><?php echo e($etudiant->nom); ?></p>
			<p class="text-center"><b>PRENOM (S) :</b> <?php echo e($etudiant->prenom); ?></p>
			<p class="text-center"><b>ADDRESSE : </b><?php echo e($etudiant->adresse); ?></p>
			<p class="text-center"><b>DATE DE NAISSENCE :</b> <?php echo e($etudiant->date_naissance); ?></p>
			<p class="text-center"><b>EMAIL : </b><?php echo e($etudiant->email); ?></p>
			<p class="text-center"><b>STATUS : </b><?php echo e($etudiant->is_active); ?></p>
			<a href="<?php echo e(url()->previous()); ?>" class="btn btn-warning btn-block">Retour</a>
			<br>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', ['title'=> 'Acceuil'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/shared/showEtudiant.blade.php ENDPATH**/ ?>