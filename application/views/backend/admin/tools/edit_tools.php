
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="left">
  <form action="<?php echo base_url()?>update-tools" method="post" enctype="multipart/form-data">
  <div class="container">
  


    <label for="title"><b>Add Tools Title</b></label></br>
       <input type="text" value="<?php echo $all_tools_by_id->title ?>"name="title" id="title" >
         </br>
 
   
   
    <input type="hidden" value="<?php echo $all_tools_by_id->id ?>"name="id" id="id" ></br>

    
          <label for="details"><b>Add Tools Details</b></label></br>
       <input type="text" value="<?php echo $all_tools_by_id->details ?>"name="details" id="details" >
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