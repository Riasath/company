
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-sidebar" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="image"><b>Recent Sidebar Image</b></label></br>
    <img src="<?php echo base_url().$all_sidebar_by_id->image?>" style="height:180px;width:300px;border:1px solid #000000;">
     </br>

 <label for="title"><b>Add Sidebar  Title</b></label></br>
    <input type="text" value="<?php echo $all_sidebar_by_id->title ?>"name="title" id="title" >
   
   
    <input type="hidden" value="<?php echo $all_sidebar_by_id->id ?>"name="id" id="id" ></br>

    <label for="details"><b>Add Sidebar  Details</b></label></br>
      
          <textarea style="background:#F1F1F1;" type="text" rows="4" cols="70"  name="details" id="details" value=""  >
         <?php echo $all_sidebar_by_id->details ?>
       </textarea>
       </br>

       <label for="mobile"><b>Add Sidebar  Mobile</b></label></br>
    <input type="text" value="<?php echo $all_sidebar_by_id->mobile ?>"name="mobile" id="mobile" >
</br>
    <label for="gmail"><b>Add Sidebar  Gmail</b></label></br>
    <input type="text" value="<?php echo $all_sidebar_by_id->gmail ?>"name="gmail" id="gmail" >
</br>
    <label for="address"><b>Add Sidebar  Address</b></label></br>
    <input type="text" value="<?php echo $all_sidebar_by_id->address ?>"name="address" id="address" >
  </br>
    <label for="image"><b>Add NEW Sidebar Image</b></label></br>
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
