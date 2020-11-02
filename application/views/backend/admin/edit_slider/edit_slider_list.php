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
  <form action="<?php echo base_url()?>update-slider-list" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="slider_image"><b>Recent slider Image</b></label></br>
    <img src="<?php echo base_url().$all_slider_info_by_id->slider_image?>" style="height:200px;width:500px;border:1px solid #000000;">
     </br>

 <label for="slider_descriptions"><b>Add Slider Title</b></label></br>
    <input type="text" value="<?php echo $all_slider_info_by_id->slider_descriptions ?>"name="slider_descriptions" id="slider_descriptions" >
   
   
    <input type="hidden" value="<?php echo $all_slider_info_by_id->slider_id ?>"name="slider_id" id="slider_descriptions" ></br>

    <label for="slider_about"><b>Add Slider Details</b></label></br>
       <input type="text" value="<?php echo $all_slider_info_by_id->slider_about ?>"name="slider_about" id="slider_about" >
         </br>
  
    <label for="slider_image"><b>Add NEW Slider Image</b></label></br>
       <input type="file" name="slider_image" id="slider_image" >
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