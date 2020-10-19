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




<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
	
<div class="container-fluid">
<div class="left" style="float: left;">
	<form action="<?php echo base_url()?>update-heading" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="footer_heading"><b>Edit Footer Heading </b></label></br>
    <input type="text"  name="footer_heading" id="footer_heading" value="<?php echo $all_heading_by_id->footer_heading?>"></br>
    
      <label for="footer_id"><b></b></label></br>
    <input type="hidden"  name="footer_id" id="footer_id" value="<?php echo $all_heading_by_id->footer_id?>"></br>

    <label for="footer_details"><b>Edit Footer Details</b></label></br>
    <input type="text"  name="footer_details" id="footer_details"
     value="<?php echo $all_heading_by_id->footer_details?>"></br>

 



  



    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
</body>
</html>