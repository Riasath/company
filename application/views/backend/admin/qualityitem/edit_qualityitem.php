
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-qualityitem" method="post" enctype="multipart/form-data">
  <div class="container">
  


    <label for="title"><b>Add Quality Item Title</b></label></br>
       <input type="text" value="<?php echo $all_qualityitem_by_id->title ?>"name="title" id="title" >
         </br>
 
   
   
    <input type="hidden" value="<?php echo $all_qualityitem_by_id->id ?>"name="id" id="id" ></br>

    
          <label for="value"><b>Add Quality Item Value</b></label></br>
       <input type="text" value="<?php echo $all_qualityitem_by_id->value ?>"name="value" id="value" >
         </br>
  
   

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
