<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Stem Coders Club">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#007bff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#007bff">
    
    <title>
      <?php if (isset($page_title)): ?>
        <?= $page_title . ' - Campus Space'; ?>
      <?php else: ?>
        <?= 'Campus Space'; ?>
      <?php endif; ?>
    </title>

    <!-- Bootstrap core CSS, FontAwesome and custom css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<!-- The Header -->
    <header class="sticky-top">
      <!-- Navbar -->
      <nav class="navbar navbar-dark bg-dark text-white navbar-expand-sm px-3 shadow shadow-sm" id="generic-navbar">
        <a class="navbar-brand" href="<?php echo site_url() ?>">
        	<h5 class="d-inline align-bottom title-font">Campus Space</h5>
        </a>
        
        <button class="navbar-toggler text-light border border-light" style="outline:none" type="button" data-toggle="collapse"
          data-target="#nav-menu">
          <span class="fas fa-align-right"></span>
        </button>
                 
        <div id="nav-menu" class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav alex-font text-white">
            <li class="nav-item active"><a class="nav-link" href="<?php echo site_url() ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url() ?>">Resources</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url() ?>">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url() ?>">About</a></li>
          </ul>

          <a href="<?= site_url(); ?>" class="btn btn-success btn-md-lg ml-md-4 mt-3 mt-md-0">Sign Out</a>
        </div>
      </nav>
    </header>
    
    <div id="page-contents">
      <!-- The Main Contents -->
      <main id="content-wrap" class="container-fluid mt-3">
