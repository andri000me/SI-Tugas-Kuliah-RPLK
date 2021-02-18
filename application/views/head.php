<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SI TUGAS KULIAH RPLK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url('/welcome/') ?>">
  SISTEM INFORMASI<strong> TUGAS KULIAH RPLK</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a href="<?php echo site_url('/welcome/') ?>" class="nav-link">List Tugas</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo site_url('/welcome/create') ?>" class="nav-link">Tambah Tugas</a>
      </li>
    </ul>
  </div>

  <div class="navbar-form navbar-right">
    <b class="glyphicon glyphicon-calendar"></b> <?php echo '<span style="color:white">'.date("l, j F Y").'</span>'; ?>&nbsp;&nbsp;
    <div class="btn-group">
      <button type="button" class="btn btn-success"><strong><?php echo $this->session->userdata("nama"); ?></strong></button>
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('/login/logout'); ?>">Log Out</a></li>
      </ul>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</nav><br><br><br>