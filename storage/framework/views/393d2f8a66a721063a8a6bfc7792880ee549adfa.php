<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
	<br>
	<div class="col-lg-12 margin-tb">
	    <div class="pull-right m-1">
	        <a class="btn btn-success rounded" href="<?php echo e(route('user.create')); ?>"> Ajouter User(s)</a>
	    </div>
	    <div class="pull-left">
		    <div class="pl-3" role="alert">
		        <h1><?php echo e(Str::title("Liste des Utilisateurs")); ?>.</h1>
		    </div>
		</div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('liste'); ?>
		<?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>




<div class="card">
    <header class="card-header">
            <p class="card-header-title">USERS</p>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="<?php echo e(route('user.index')); ?>" <?php if (! ($role)): ?> selected <?php endif; ?>>Toutes roles</option>
                    <?php $__currentLoopData = $profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e(route('user.index', $x->role)); ?>" <?php echo e($role == $x->role ? 'selected' : ''); ?>><?php echo e($x->role); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
        </header>
</dir>





	    <table class="table"> 
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">NOM</th>
		      <th scope="col">PRENOM(S)</th>
		      <th scope="col">ADRESSE</th>
		      <th scope="col">BIRTHDAY</th>
		      <th scope="col">E-MAIL</th>
		      <th scope="col">STATUT</th>
		      <th class="text-center" scope="col" width=15%>ACTIONS</th>
		    </tr>
		  </thead>
		  <tbody>
			<?php $__currentLoopData = $result; $i=0; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <tr>
			      <th scope="row"><?php echo e(++$i); ?></th>
			      <td><?php echo e($user->nom); ?></td>
			      <td><?php echo e($user->prenom); ?></td>
			      <td><?php echo e($user->adresse); ?></td>
			      <td><?php echo e($user->date_naissance); ?></td>
			      <td><?php echo e(Str::limit($user->email, 23)); ?></td>
			      <td><?php echo e(str::ucfirst($user->role)); ?></td>
			      <td class="row justify-content-center">
		      		<a class="edit-modal btn btn-success btn-sm rounded" href="<?php echo e(route('user.show', $user->id)); ?>"><i class="fa fa-eye"></i></a>
		      		<a class="edit-modal btn btn-warning btn-sm rounded mx-1" href="<?php echo e(route('user.edit', $user->id)); ?>"><i class="fa fa-pencil"></i></a>
			      	<form action="<?php echo e(route('user.destroy',$user->id)); ?>" method="POST" accept-charset="utf-8" class="d-inline-block">
			      		<?php echo csrf_field(); ?>
						<?php echo e(method_field('DELETE')); ?>

			      		<button type="button" class="btn btn-danger btn-sm rounded" data-original-title="" title="" onclick="confirm('<?php echo e(__("Êtes-Vous sûr de bien vouloir supprimé cet utilisateur ?")); ?>') ? this.parentElement.submit() : ''">
                                      <i class="material-icons"><i class="fa fa-trash-o"></i>
                                      <div class="ripple-container"></div>
                        </button>
			      	</form>
		      	  </td>
			    </tr>
    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  </tbody>
		</table>
		<?php echo e($result->links()); ?>

		<?php echo $__env->make('layouts.partials.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/admin/viewUser.blade.php ENDPATH**/ ?>