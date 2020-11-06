<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="left">
  <form action="<?php echo base_url()?>update-feedback" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="image"><b>Recent Author Image</b></label></br>
    <img src="<?php echo base_url().$all_feedback_by_id->image?>" style="height:120px;width:170px;border:1px solid #000000;">
     </br>

 <label for="description"><b>Add Feedback description</b></label></br>
    <input type="text" value="<?php echo $all_feedback_by_id->description ?>"name="description" id="description" >
   
   
    <input type="hidden" value="<?php echo $all_feedback_by_id->id ?>"name="id" id="id" ></br>

    <label for="author"><b>Add Author Name</b></label></br>
       <input type="text" value="<?php echo $all_feedback_by_id->author ?>"name="author" id="author" >
         </br>
          <label for="market"><b>Add Author Market</b></label></br>
       <input type="text" value="<?php echo $all_feedback_by_id->market ?>"name="market" id="market" >
         </br>
  
    <label for="image"><b>Add NEW Author Image</b></label></br>
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