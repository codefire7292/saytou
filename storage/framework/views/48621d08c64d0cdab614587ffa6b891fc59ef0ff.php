<?php $__env->startSection('content'); ?>
    <div class="main">
        <div class="container">
            <?php if($message = Session::get('error')): ?>
                <div class="alert alert-danger">
                    <p><?php echo $message; ?></p>
                </div>
            <?php endif; ?>
             <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                    <p><?php echo $message; ?></p>
                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong>ATTENTION !</strong> SVP veuiller verifier vos données fournies<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
            <div class="signup-content">
                <div class="signup-img">
                    <img src="<?php echo e(asset('investigator/images/signup-img.jpg')); ?>" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="<?php echo e(route('enqueter.store')); ?>" class="register-form" id="register-form">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" value="<?php echo e(date('Y-m-d H:i:s')); ?>" name="date" required/>
                        <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="Per_id" required/>
						<h2 class="row justify-content-center">Formulaire d'enquête</h2>
                            <div class="form-group">
                                <label for="name">Nom :</label>
                                <input type="text" name="nom" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Prénom(s) :</label>
                                <input type="text" name="prenom" id="father_name" required/>
                            </div>
                        <div class="form-group">
                            <label for="address">Adresse :</label>
                            <input type="text" name="adresse" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Séxe :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="sexe" id="male" checked>
                                <label for="male">Homme</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Femme</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Département :</label>
                                <div class="form-select">
                                    <select name="departement" id="state">
                                        <option value=""></option>
                                        <option value="us">America</option>
                                        <option value="uk">English</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">Région :</label>
                                <div class="form-select">
                                    <select name="region" id="city">
                                        <option value=""></option>
                                        <option value="losangeles">Los Angeles</option>
                                        <option value="washington">Washington</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" onclick="location.reload();" value="Annuller" class="submit" id="reset" />
                            <input type="submit" value="Valider" class="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="<?php echo e(asset('investigator/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('investigator/js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/saytou/resources/views/pages/investigator/index.blade.php ENDPATH**/ ?>