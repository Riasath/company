
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
	<form action="<?php echo base_url()?>update-logo" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="image"><b>Recent Logo  </b></label></br>
    <img src="<?php echo base_url().$all_logo_by_id->image?>" style="height:85px;width:120px;border:1px solid #000000;">
     </br>
     
   


   
   
    <input type="hidden" value="<?php echo $all_logo_by_id->id ?>"name="id" id="id" ></br>

   </br>
   </br>
  
    <label for="image"><b>Add NEW Logo </label></br>
       <input type="file" name="image" id="image" >
         </br>

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
</body>
</html>