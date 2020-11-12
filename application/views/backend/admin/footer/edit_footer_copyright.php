
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
	<form action="<?php echo 
base_url()?>update-footer-copyright" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="year"><b>Edit Year </b></label></br>
    <input type="text"  name="year" id="year" value="<?php echo $edit_footer_copyright_by_id->year?>">
    
      <label for="id"><b></b></label>
    <input type="hidden"  name="id" id="id" value="<?php echo $edit_footer_copyright_by_id->id?>"></br>

    <label for="company_name"><b>Edit Company Name</b></label></br>
    <input type="text"  name="company_name" id="company_name"
     value="<?php echo $edit_footer_copyright_by_id->company_name?>"></br>

    <label for="design"><b>Edit Design</b></label></br>
    <input type="text"  name="design" id="design"
     value="<?php echo $edit_footer_copyright_by_id->design?>"></br>

    <label for="developed"><b>Edit Developed</b></label></br>
    <input type="text"  name="developed" id="developed"
     value="<?php echo $edit_footer_copyright_by_id->developed?>"></br>

    <label for="only_on"><b>Edit Only ON</b></label></br>
    <input type="text"  name="only_on" id="only_on"
     value="<?php echo $edit_footer_copyright_by_id->only_on?>"></br>

 



  



    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
</body>
</html>