<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('/'); ?>">Main</a>
          <a class="dropdown-item" href="<?= base_url('/home/about'); ?>">About</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href=" <?= base_url('home/admin'); ?>" >Admin</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a class="nav-link" href=" <?= base_url('/auth/login'); ?>" >Logout</a>
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label=""> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </div>
</nav>