
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo e(route('home_path')); ?>"><span class="fa fa-home"></span> 
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
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('etudiant_path')); ?>"><span class="fa fa-user"></span> Etudiants</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i>
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('users_path')); ?>"><i class="fa fa-list"></i> Lister</a>
          <a class="dropdown-item" href="<?php echo e(route('users.create_path')); ?>"><i class="fa fa-user-plus"></i> Ajouter</a>
        </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog fa-spin fa-1,5x"></i> Enquéte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('enquete_path')); ?>"><i class="fa fa-list"></i> Lister</a>
          <a class="dropdown-item" href="<?php echo e(route('enquete.create_path')); ?>"><i class="fa fa-folder"></i> Ajouter</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('help_path')); ?>"><i class="fa fa-life-ring"></i> Help</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><span class="fa fa-search"></span> Chercher</button>
    </form>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\saytou\resources\views/layouts/partials/nav.blade.php ENDPATH**/ ?>