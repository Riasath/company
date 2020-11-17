<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<meta charset="utf-8">
	<title>WELCOME TO RTSOFBD</title>

	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link id="bootstrap-style" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	<style type="text/css">
			body { background: url(<?php echo base_url('assets/images/bg-login.jpg');?>) !important; }
		</style>
		
		
		
</head>

<body>
<div class="container-fluid-full">
<div class="row-fluid">
	
<div class="row-fluid">
<div class="login-box" style="height:420px;">
	<div class="icons">
		<a href="#"><i class="halflings-icon home"></i></a>
		<a href="#"><i class="halflings-icon cog"></i></a>
	</div>
	<h2 style="text-align: center;">Login to your account</h2>
	<form class="form-horizontal" action="<?php echo base_url()?>admin-login" method="post">
		

<div class="input-prepend" title="Username">
	<span >Username</span>
	<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>
</div>
<div class="clearfix"></div>

<div class="input-prepend" title="Password">
	<span >Password</span>
	<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
</div>
<div class="clearfix"></div>

<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

<div class="button-login">	
	<button type="submit" class="btn btn-primary">Login</button>
</div>
<div class="clearfix"></div>
		
</div>
</form>
</div>
			

	</div>
	
		</div>
	
	

		<script src="<?php echo base_url('assets/js/jquery-1.9.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-migrate-1.0.0.min.js')?>"></script>
	
		<script src="<?php echo base_url('assets/js/jquery-ui-1.10.0.custom.min.js')?>"></script>
	
		<script src="<?php echo base_url('assets/js/jquery.ui.touch-punch.js')?>"></script>
	

		<script src="<?php echo base_url('assets/')?>js/custom.js"></script>
	
	
</body>
</html>
