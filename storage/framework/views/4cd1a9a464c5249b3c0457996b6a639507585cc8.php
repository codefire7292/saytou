 
<?php echo $__env->make('layouts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
	<br>
		<div class="col-lg-12 margin-tb">
	<?php if(Auth::user()->role === 'admin'): ?>
	    <div class="pull-right m-1">
	        <a class="btn btn-success rounded" href="<?php echo e(route('enquete.create')); ?>"> Ajouter Enquête</a>
	    </div>
	<?php endif; ?>
	    <div class="pull-left">
		    <div class="pl-3" role="alert">
		        <h1><?php echo e(Str::title("Liste des Enquêtes")); ?>.</h1>
		    </div>
		</div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('liste'); ?>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">NOM ENQUETE</th>
	      <th scope="col">DEBUT</th>
	      <th scope="col">FIN</th>
	      <th scope="col">COÛT</th>
	      <th class="text-center" width=15% scope="col">ACTIONS</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php $__currentLoopData = $result; $i = 0; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    <tr>
		      <th scope="row"><?php echo e(++$i); ?></th>
		      <td><?php echo e($enquete->motif); ?></td>
		      <td><?php echo e($enquete->debut); ?></td>
		      <td><?php echo e($enquete->fin); ?></td>
		      <td><?php echo e($enquete->cout); ?></td>
		      <td class="text-center" class="row justify-content-center">
		      <a class="edit-modal btn btn-success btn-sm rounded" href="<?php echo e(route('enquete.show', $enquete->id)); ?>"><i class="fa fa-eye"></i></a>
		    <?php if(Auth::user()->role === 'admin'): ?>
		      		<a class="edit-modal btn btn-warning btn-sm rounded mx-1" href="<?php echo e(route('enquete.edit', $enquete->id)); ?>"><i class="fa fa-pencil"></i></a>
			      	<form action="<?php echo e(route('enquete.destroy',$enquete->id)); ?>" method="POST" accept-charset="utf-8" class="d-inline-block">
			      		<?php echo csrf_field(); ?>
						<?php echo e(method_field('DELETE')); ?>

			      		<button type="button" class="btn btn-danger btn-sm rounded" data-original-title="" title="" onclick="confirm('<?php echo e(__("Êtes-Vous sûr de bien vouloir supprimé cet utilisateur ?")); ?>') ? this.parentElement.submit() : ''">
                                      <i class="material-icons"><i class="fa fa-trash-o"></i>
                                      <div class="ripple-container"></div>
                        </button>
			      	</form>
			<?php endif; ?>
		      </td>
		    </tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  </tbody>
	</table>
		<?php echo e($result->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/shared/adminCoordinator/viewEnquete.blade.php ENDPATH**/ ?>