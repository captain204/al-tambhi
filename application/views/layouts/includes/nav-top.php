<!DOCTYPE html>
<html>
<head>
	<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/altambhi.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js">
	<title>Al Tambhi</title>
</head>
	<body>
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  		<div class="container">
		  			<div class="navbar-header">
		  				<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>	
		  				</button>
		  					<a class="navbar-brand" href="http://localhost/al-tambhi/">Al Tambhi Private </a>
		  			</div>
		  			<div class="collapse navbar-collapse">
		  				<ul class="nav navbar-nav">
		  					<li class="active"><a href="http://localhost/al-tambhi/">Home</a></li>
		  				</ul>
		  				<ul class="nav navbar-nav">
		  					<li class="active"><a href="<?php echo base_url();?>home/contact">Contact us</a></li>
		  				</ul>
		  				<ul class="nav navbar-nav">
		  					<li class="active"><a href="<?php echo base_url();?>graduates"id="menu">Graduates<span class="caret"><span></a>
		  					   <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		  					   		<li role="presenttion"><a role="menu-item" tabindex="-1" href="#">2015</a></li>
		  					   		<li role="presenttion"><a role="menu-item" tabindex="-1" href="#">2016</a></li>
		  					   </ul>
		  					</li>
		  				</ul>
		  				<ul class="nav navbar-nav">
		  					<li class="active"><a href="<?php echo base_url();?>students/logout">Log out</a></li>
		  				</ul>
			  		</div>
	  		 </div>
	  	</div>