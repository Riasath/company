
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
	<form action="<?php echo base_url()?>update-client-list" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="client_image"><b>Recent Client Image</b></label></br>
    <img src="<?php echo base_url().$all_client_list_by_id->client_image?>" style="height:85px;width:120px;border:1px solid #000000;">
     </br>
     
   


   
   
    <input type="hidden" value="<?php echo $all_client_list_by_id->client_id ?>"name="client_id" id="client_id" ></br>

   </br>
   </br>
  
    <label for="client_image"><b>Add NEW Client Image</label></br>
       <input type="file" name="client_image" id="client_image" >
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