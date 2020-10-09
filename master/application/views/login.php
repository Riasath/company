<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>




<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
	<div class="wrapper2">
	<h1>
		Administrative Login 
	</h1>
	<hr>

<div class="left">
	<form action="<?php echo base_url()?>login-area" method="post">
  <div class="container">
   

    <label for="name"><b> User Name</b></label></br>
    <input type="text" placeholder="Enter Name" name="username" id="name" required></br>

    <label for="password"><b>Password</b></label></br>
    <input type="password" placeholder="Enter Password" name="password" id="ppassword" required></br>


    <button type="submit" class="registerbtn">Submit</button></br>
     <h6>New User?</h6></br>
    <a href="<?php echo base_url()?>login-register">Register</a>
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
</body>
</html>