<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD</title>




<link rel="stylesheet" href="assets/css/stylelogin1.css" media='all'>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" media='all'>
</head>
<body>
	

<div class="left" style="float: left;">
	<form action="<?php echo base_url()?>save-copyright" method="post" enctype="multipart/form-data">
  <div class="container">
   



    <label for="year"><b>Add Year</b></label></br>
    <input type="text"  name="year" id="year" required></br>
    <label for="company_name"><b>Add Company Name</b></label></br>
    <input type="text"  name="company_name" id="company_name" required>
  </br>
   <label for="design"><b>Add Designed By</b></label></br>
    <input type="text"  name="design" id="design" required>
  </br>
   <label for="developed"><b>Add Developed By</b></label></br>
    <input type="text"  name="developed" id="developed" required>
  </br>
   <label for="only_on"><b>Add Only ON</b></label></br>
    <input type="text"  name="only_on" id="only_on" required>
  </br>
    



    <button type="submit" class="registerbtn">Submit</button></br>

   
  </div>
</form>
</div>
</div>

<div id="right" style="float: right;">
<p style="margin-top:30px;margin-right:200px;">
      <a  href="<?= base_url();?>manage-copyright"><button type="button"class="btn btn-danger">Manage Copyright</button></a>
    

      </p>
    </div>


</body>
</html>
</body>
</html>