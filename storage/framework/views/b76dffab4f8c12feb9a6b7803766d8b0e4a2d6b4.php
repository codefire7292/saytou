
<?php if(Auth::user()->role === 'admin'): ?>
	<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Auth::user()->role === 'coordonnateur'): ?>
	<?php echo $__env->make('layouts.app_coordinator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Auth::user()->role === 'commanditaire'): ?>
	<?php echo $__env->make('layouts.app_patron', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Auth::user()->role === 'enquêteur'): ?>
	<?php echo $__env->make('layouts.app_investigator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Auth::user()->role === 'étudiant'): ?>
	<?php echo $__env->make('layouts.app_etudiant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /root/saytou/resources/views/layouts/partials/nav.blade.php ENDPATH**/ ?>