
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
	<form action="<?php echo base_url()?>update-footericon" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="footer_images"><b>Recent Avatar</b></label></br>
    <img src="<?php echo base_url().$edit_footericon_by_id->footer_images?>" style="height:85px;width:120px;border:1px solid #000000;">
     </br>
     
   


   
   
    <input type="hidden" value="<?php echo $edit_footericon_by_id->id ?>"name="id" id="id" ></br>

   </br>
   </br>
  
    <label for="footer_images"><b>Add NEW AVATAR</b></label></br>
       <input type="file" name="footer_images" id="footer_images" >
         </br>
         </br>
         </br>
         

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
