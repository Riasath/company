
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
	<form action="<?php echo base_url()?>update-testimonials-list" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="testi_text"><b>Edit Testimonials Text</b></label></br>
    <input type="text"  name="testi_text" id="testi_text" value="<?php echo $all_testimonials_list_by_id->testi_text?>"></br>
    
      <label for="testi_text"><b></b></label></br>
    <input type="hidden"  name="testi_id" id="testi_id" value="<?php echo $all_testimonials_list_by_id->testi_id?>"></br>

    <label for="testi_author"><b>Edit Testimonials Author</b></label></br>
    <input type="text"  name="testi_author" id="testi_author"
     value="<?php echo $all_testimonials_list_by_id->testi_author?>"></br>

    <label for="testi_company"><b>Edit Testimonials Company</b></label></br>
    <input type="text" name="testi_company" id="testi_company" 
     value="<?php echo $all_testimonials_list_by_id->testi_company?>"></br>
 



  



    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
</body>
</html>