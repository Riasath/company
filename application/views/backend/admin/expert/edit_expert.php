
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-expert" method="post" enctype="multipart/form-data">
  <div class="container">
  


    <label for="title"><b>Add expert Title</b></label></br>
       <input type="text" value="<?php echo $all_expert_by_id->title ?>"name="title" id="title" >
         </br>
 
   
   
    <input type="hidden" value="<?php echo $all_expert_by_id->id ?>"name="id" id="id" ></br>

    
          <label for="details"><b>Add expert Details</b></label></br>
      
         <textarea style="background:#DDDDDD;" type="text" rows="4" cols="70"  name="details" id="details" value="" >
         <?php echo $all_expert_by_id->details ?>
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
