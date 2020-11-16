
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-vision" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="image1"><b>Recent Vision Image1</b></label></br>
    <img src="<?php echo base_url().$all_vision_by_id->image1?>" style="height:100px;width:180px;border:1px solid #000000;">
     </br>
     <label for="image2"><b>Recent Vision Image2</b></label></br>
    <img src="<?php echo base_url().$all_vision_by_id->image2?>" style="height:100px;width:180px;border:1px solid #000000;">
     </br>

 <label for="title"><b>Add Vision  Title</b></label></br>
    <input type="text" value="<?php echo $all_vision_by_id->title ?>"name="title" id="title" >
   
   
    <input type="hidden" value="<?php echo $all_vision_by_id->id ?>"name="id" id="id" ></br>

    <label for="details"><b>Add Vision  Details</b></label></br>
     
          <textarea style="background:#DDDDDD;" type="text" rows="4" cols="70"  name="details" id="details" value="" >
         <?php echo $all_vision_by_id->details ?>
       </textarea>
       </br>
  
    <label for="image1"><b>Add NEW Vision  Image1</b></label></br>
       <input type="file" name="image1" id="image1" >
         </br>
         <label for="image2"><b>Add NEW Vision  Image2</b></label></br>
       <input type="file" name="image2" id="image2" >
         </br>

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
