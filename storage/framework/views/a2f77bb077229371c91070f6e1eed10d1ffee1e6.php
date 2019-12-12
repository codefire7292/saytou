<?php $date = app('App\Utilities\Date'); ?>





<?php $__env->startSection('content'); ?>

<h1>Acceuil</h1>
Bonjour <?php echo e($fistName); ?> <b> <i><?php echo e($fistName1); ?></i> <?php echo e($lastName); ?></b>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

	<footer>
		<?php if($date->isWeekend()): ?>
			<?php echo e("C'est le week_End"); ?>

		<?php else: ?>
			<?php echo e("Ce n'est pas le week_End"); ?>

		<?php endif; ?>
		<div>
			pied de page &copy 2019
		</div>
	</footer>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', ['title'=> 'Acceuil'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saytou\resources\views/index.blade.php ENDPATH**/ ?>