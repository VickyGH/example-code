<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>static/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>PRE Tabasco</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->
  <link href="<?php echo base_url(); ?>static/assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--<link href="<?php echo base_url(); ?>static/assets/css/material-kit.css" rel="stylesheet"/>-->
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url(); ?>static/assets/css/demo.css" rel="stylesheet" />
</head>
<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
        <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a href="http://www.creative-tim.com">
        <div class="logo-container">
          <div class="logo">
            <img src="<?php echo base_url(); ?>static/assets/img/logoPRE.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
	        </div>
				</div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navigation-index">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<?php echo base_url(); ?>">
						<i class="material-icons">dashboard</i> Inicio
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('beneficiarios');?>">
						<i class="material-icons">assignment</i> Beneficiarios
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('descargables');?>">
            <i class="material-icons">description</i> Descargables
					</a>
				</li>
        <li>
					<a href="<?php echo base_url('actividades');?>">
            <i class="material-icons">portrait</i> Actividades
					</a>
				</li>
        <li>
					<a href="<?php echo base_url('directorio');?>">
            <i class="material-icons">description</i> Directorio
					</a>
				</li>
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo base_url(); ?>static/assets/img/bg5.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
            <label class="Titulo">PRE</label>
            <br><label class="Subtitulo">Programa de la Reforma Educativa</label>
					</div>
				</div>
			</div>
		</div>
	</div>
