


<?php echo $__env->make('layouts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
	<br>
	<h1 class="row justify-content-center">Votre page d'aide</h1>
	<div class="row justify-content-center">
		<div class="col-10 shadow p-5 mb-5 bg-white rounded">
			<h3>Le Lorem Ipsum est simplement</h3>
				<p class="text-muted">
				<i class="fa fa-quote-left fa-1x fa-pull-left fa-border"></i>
					Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.	
				<i class="fa fa-quote-right fa-1x fa-pull-right fa-border"></i>
				</p>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/shared/help.blade.php ENDPATH**/ ?>