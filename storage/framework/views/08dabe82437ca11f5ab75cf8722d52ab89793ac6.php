
<?php $__env->startSection('enqueteForm'); ?>
	<div class="row justify-content-center">
		<div class="col-10 shadow p-3 mb-5 bg-white rounded">
			<form>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Intitulé</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enquéte exemple">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Libellé</label>
			    <textarea class="form-control" id="editor" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('usersForm'); ?>
	<div class="row justify-content-center">
    	<div class="col-10 shadow p-3 mb-5 bg-white rounded">
			<form>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputName4">Nom</label>
			      <input type="text" class="form-control" id="inputName4" placeholder="Nom">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPrenom4">Prénom</label>
			      <input type="text" class="form-control" id="inputPrenom4" placeholder="Prénom">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="inputEmail4" placeholder="codeFife@saytou.com">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-row">	
				  <div class="form-group col-md-6">
				    <label for="inputAddress">Addresse</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="Bambey">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="inputDate2">Date de naissance</label>
				    <input type="date" class="form-control" id="inputDate2" placeholder="02/09/2019">
				  </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputVille">Ville</label>
			      <input type="text" class="form-control" id="inputVille">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">Statut</label>
			      <select id="inputState" class="form-control">
			        <option selected>...Choisir...</option>
			        <option value="0">Admin</option>
			        <option value="1">Enquéteur</option>
			        <option value="2">Coordonnateur</option>
			        <option>commanditaire</option>
			      </select>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputFile">Photo profile</label>
			      <input type="file" class="form-control" id="inputFile">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
			      </label>
			    </div>
			  </div>
			  <div class="form-group"> 
			  	<button type="submit" class="btn btn-secondary btn-block"><span class="fa fa-send" style="color:#4f4;"></span> Enregistrer</button>
			  </div>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('login'); ?>
			<div class = "entrées-group-input-lg" >
			  <span class = "entrée-group-module" >
			    <i class = " fa fa-enveloppe " > </ i>
			  </span>
			  <input class = "form-control" type = "text" placeholder = "Adresse e-mail" >
			</div>
			<div class = "groupe_entrée groupe-lg" >
			  <span class = "groupe-add-entrée" >
			    <i class = " fa fa-lock " > </ i>
			  </span>
			  <input class = "form-control" type = "password" placeholder = "Password" >
			</div>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\saytou\resources\views/layouts/partials/form.blade.php ENDPATH**/ ?>