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




<link rel="stylesheet" href="assets/css/stylelogin1.css" media='all'>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" media='all'>
</head>
<body>
	
<div class="container-fluid">
<div class="left" style="float: left;">
	<form action="<?php echo base_url()?>save-testimonials" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="testi_text"><b>Add Testimonials Text</b></label></br>
    <input type="text"  name="testi_text" id="testi_text" required></br>
    

    <label for="testi_author"><b>Add Testimonials Author</b></label></br>
    <input type="text"  name="testi_author" id="testi_author" required></br>

    <label for="testi_company"><b>Add Testimonials Company</b></label></br>
    <input type="text" name="testi_company" id="testi_company" required></br>
 



  



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>



   



</div>
<div id="right" style="float: right;">
   <p style="margin-top: 50px; margin-right:250px;">
      <a  href="<?= base_url();?>manage-testimonials"><button type="button"class="btn btn-danger">Manage Testimonials</button></a>
    

      </p>
  
</div>
</div>
</body>
</html>
</body>
</html>