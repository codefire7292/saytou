
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo e(route('coordinator_index')); ?>"><span class="ti-home"></span> 
Acceuil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('about_path')); ?>"><span class="fa fa-book"></span> 
About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
          Etudiants
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('etudiant.index')); ?>"><i class="fa fa-list"></i> Lister</a>
          <a class="dropdown-item" href="<?php echo e(route('etudiant.create')); ?>"><i class="fa fa-user-plus"></i> Ajouter</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i>
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('user.index')); ?>"><i class="fa fa-list"></i> Lister</a>
          <a class="dropdown-item" href="<?php echo e(route('user.create')); ?>"><i class="fa fa-user-plus"></i> Ajouter</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('enquete.index')); ?>"><i class="fa fa-cog fa-spin fa-1,5x"></i> Enquéte</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-world"></i>
          Zones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('zone.index')); ?>"><i class="ti-map"></i> Lister</a>
          <a class="dropdown-item" href="<?php echo e(route('zone.create')); ?>"><i class="ti-map-alt"></i> Ajouter</a>
          <a class="dropdown-item" href="<?php echo e(route('zone.create')); ?>"><i class="fa fa-street-view"></i> Affectations</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('help_path')); ?>"><i class="fa fa-life-ring"></i> Help</a>
      </li>
    </ul>

  <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
        <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
            <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
            <?php endif; ?>
        <?php else: ?>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->nom); ?> <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
        <?php endif; ?>
    </ul>

  <!-- search bar -->  
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><span class="fa fa-search"></span> Chercher</button>
    </form>
  </div>
</nav><?php /**PATH /root/saytou/resources/views/layouts/partials/nav_coordinator.blade.php ENDPATH**/ ?>