
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-description" method="post" enctype="multipart/form-data">
  <div class="container">
  


    <label for="title"><b>Add Description Title</b></label></br>
     

          <textarea style="background:#DDDDDD;" type="text" rows="4" cols="70"  name="title" id="title" value="" >
         <?php echo $all_description_by_id->title ?></textarea>
       </br>
 
   
   
    <input type="hidden" value="<?php echo $all_description_by_id->id ?>"name="id" id="id" ></br>

    
          <label for="details1"><b>Add Description Details1</b></label></br>
      
          <textarea style="background:#DDDDDD;" type="text" rows="4" cols="70"  name="details1" id="details1" value="" >
         <?php echo $all_description_by_id->details1 ?>
       </textarea>
       </br>
  
  <label for="details2"><b>Add Description Details2</b></label></br>
      
  <textarea style="background:#DDDDDD;" type="text" rows="4" cols="70"  name="details2" id="details2" value="" >
         <?php echo $all_description_by_id->details2 ?>
       </textarea>
       </br>
        
   

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
