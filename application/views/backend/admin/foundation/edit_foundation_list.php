
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-foundation-list" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="foundation_image"><b>Recent foundation Image</b></label></br>
    <img src="<?php echo base_url().$all_foundation_list_by_id->foundation_image?>" style="height:180px;width:200px;border:1px solid #000000;">
     </br>

 <label for="date"><b>Add Date</b></label></br>
    <input type="date" value="<?php echo $all_foundation_list_by_id->date ?>"name="date" id="date" >
   
   
    <input type="hidden" value="<?php echo $all_foundation_list_by_id->id ?>"name="id" id="id" ></br>

    <label for="foundation_title"><b>Add Foundation Title</b></label></br>
       <input type="text" value="<?php echo $all_foundation_list_by_id->foundation_title ?>"name="foundation_title" id="foundation_title" >
         </br>
          <label for="foundation_details"><b>Add Foundation Details</b></label></br>
    
    <textarea style="background:#DDDDDD;" type="text" rows="4" cols="70"  name="foundation_details" id="foundation_details" value="" >
         <?php echo $all_foundation_list_by_id->foundation_details ?>
       </textarea>
       </br>
        
    <label for="foundation_image"><b>Add NEW Foundation Image</b></label></br>
       <input type="file" name="foundation_image" id="foundation_image" >
         </br>

    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
