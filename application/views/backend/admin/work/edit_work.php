
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="left">
  <form action="<?php echo base_url()?>update-work" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="image"><b>Recent Work Image</b></label></br>
    <img src="<?php echo base_url().$all_work_by_id->image?>" style="height:180px;width:200px;border:1px solid #000000;">
     </br>

 
   
   
    <input type="hidden" value="<?php echo $all_work_by_id->id ?>"name="id" id="id" ></br>

    <label for="title"><b>Add Work Title</b></label></br>
       <input type="text" value="<?php echo $all_work_by_id->title ?>"name="title" id="title" >
         </br>
          <label for="details"><b>Add Work Details</b></label></br>
       <input type="text" value="<?php echo $all_work_by_id->details ?>"name="details" id="details" >
         </br>
  
    <label for="image"><b>Add NEW Work Image</b></label></br>
       <input type="file" name="image" id="image" >
         </br>

    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
</body>
</html>