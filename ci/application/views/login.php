<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>




<link rel="stylesheet" href="front-end/css/stylelogin.css" media='all'>
<link rel="stylesheet" href="front-end/css/bootstrap.min.css" media='all'>
</head>
<body>
	<div class="wrapper2">
	<h1>
		User Login Area
	</h1>
	<hr>

<div class="left">
	<form action="<?php echo base_url()?>users-login-area" method="post">
  <div class="container">
   

    <label for="name"><b> User Name</b></label></br>
    <input type="text" placeholder="Enter Name" name="username" id="name" required></br>

    <label for="password"><b>Password</b></label></br>
    <input type="password" placeholder="Enter Password" name="password" id="ppassword" required></br>


    <button type="submit" class="registerbtn">Submit</button></br>
     <h6>New User?</h6></br>
    <a href="<?php echo base_url()?>user-register">Register</a>
  </div>
</form>
</div>
</div>
<div class="wrapper1">
	<h1>
		Admin Login Area
	</h1>
	<hr>

<div class="left">
	<form action="<?php base_url()?>admin-login-area" method="post">
  <div class="container">
   

    <label for="name"><b> Name</b></label></br>
    <input type="text" placeholder="Enter Name" name="adminname" id="name" required> </br>

    <label for="password"><b>Password</b></label></br>
    <input type="password" placeholder="Enter Password" name="adminpassword" id="ppassword" required></br>

    <button type="submit" class="registerbtn">Submit</button></br>
  </div>
</form>
</div>




</div>
</body>
</html>