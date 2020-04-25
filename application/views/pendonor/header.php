<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Ikhlas Donor Darah</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/') ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url('assets/') ?>js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- <link href="<?php echo base_url('assets/') ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
  <link href="<?php echo base_url('assets/') ?>js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url('assets/') ?>js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- <link href="<?php echo base_url('assets/') ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
</head>
<body>
  <nav class="orange darken-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="https://bebasberkaryaweb.files.wordpress.com/2018/03/dd.png" alt="" height="70"></a>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="<?php echo base_url('pendonor') ?>">Setting Akun</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url('pendonor/logout') ?>">Logout</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo site_url('/welcome') ?>">Home</a></li>
        <li><a href="<?php echo site_url('/welcome/jadwal') ?>">Jadwal</a></li>
        <li><a href="<?php echo site_url('/welcome/hadiah') ?>">Hadiah</a></li>
        <li><a href="<?php echo site_url('/welcome/kontak') ?>">Kontak PMI</a></li>
        <li><a href="<?php echo site_url('/welcome/tentang') ?>">Tentang Donor</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Akun<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
      </ul>
      
      <!-- <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
    
    </div>
  </nav>