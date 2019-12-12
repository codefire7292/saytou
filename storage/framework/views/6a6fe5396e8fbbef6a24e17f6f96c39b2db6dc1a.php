 
<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->startSection('enqueteUpdate'); ?>
	<?php if($errors->any()): ?>
	    <div class="alert alert-danger">
	        <ul>
	            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <li><?php echo e($error); ?></li>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </ul>
	    </div>
	<?php endif; ?>

	<div class="row justify-content-center">
		<div class="pull-left">
		    <div class="pl-3" role="alert">
		        <h1><?php echo e(Str::title("Modifier L'enquête")); ?>.</h1>
		    </div>
		</div>
		<div class="col-10 shadow p-3 mb-5 bg-white rounded">
			<div class="col-lg-12 margin-tb">
	            <div class="pull-left">
	                <div class="alert  alert-success alert-dismissible fade show btn-sm" role="alert">
	                    <span class="badge badge-pill badge-danger"><i class="fa fa-exclamation-triangle"></i> ATTENTION !!!</span> Veuillez remplir tout les champs.
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	            </div>
	            <div class="pull-right">
	                <a class="btn btn-success rounded" href="<?php echo e(route('enquete.index')); ?>"> Annuller</a>
	            </div>
        	</div>
			<form method="POST" action="<?php echo e(route('enquete.update',$enquete)); ?>">
						<?php echo csrf_field(); ?>
						<?php echo e(method_field('PUT')); ?>

				<input type="hidden" name="id" value=<?php echo e(Auth::user()->id); ?>>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Motif</label>
				    <input type="text" name="motif" class="form-control" id="exampleFormControlInput1" placeholder="Enquéte exemple" value="<?php echo e(old('motif')?? $enquete->motif); ?>">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Montant</label>
				    <input type="number" name="cout" class="form-control" id="exampleFormControlInput1" placeholder="500 000 Fr" value="<?php echo e(old('cout')?? $enquete->cout); ?>">
				  </div>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Contexte</label>
			    <textarea name="contexte" class="form-control" id="editor" id="exampleFormControlTextarea1" rows="3" ><?php echo old('contexte')?? $enquete->contexte; ?></textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
					    <label for="inputDate2">Début</label>
					    <input type="datetime-local" name="debut" class="form-control" id="inputDate2" placeholder="02/09/2019" value="<?php echo old('debut')?? $enquete->debut; ?>">
				  </div>
				  <div class="form-group col-md-6">
					    <label for="inputDate2">Fin</label>
					    <input type="datetime-local" name="fin" class="form-control" id="inputDate2" placeholder="02/09/2019" value="<?php echo e(old('fin')?? $enquete->fin); ?>">
				  </div>
			  </div>
			  <div class="form-group"> 
			  	<button type="submit" class="btn btn-secondary btn-block"><span class="fa fa-send" style="color:#4f4;"></span> Enregistrer</button>
			  </div>
			</form>
		</div>
	</div>
	<?php if(Auth::user()->role === 'admin'): ?>
		<?php echo $__env->make('layouts.partials.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/admin/updateEnquete.blade.php ENDPATH**/ ?>