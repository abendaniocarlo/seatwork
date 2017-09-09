<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width; initial-scale=1.0"/>
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
	
</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header" style="background-color:#4D4D4D; color: white;">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 text-center">
			<br />
			<h2>MENU</h2>
			<br />
			<a href="<?php echo base_url('sms') ?>" class="lead btn btn-primary btn-lg" style="width:100%;">Students</a>
			<br />
			<br />
			<a href="<?php echo base_url('sms/course/') ?>" class="lead btn btn-info btn-lg" style="width:100%;">Courses</a>
		</div>
		<div class="col-md-10 contents">
		<br />