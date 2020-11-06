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
  <form action="<?php echo base_url()?>update-team" method="post" enctype="multipart/form-data">
  <div class="container">
  
<label for="image"><b>Recent Member Image</b></label></br>
    <img src="<?php echo base_url().$all_team_by_id->image?>" style="height:180px;width:200px;border:1px solid #000000;">
     </br>
      <label for="name"><b>Add Member Name</b></label></br>
       <input type="text" value="<?php echo $all_team_by_id->name ?>"name="name" id="name" >
         </br>
          <label for="post"><b>Add Member Post</b></label></br>
       <input type="text" value="<?php echo $all_team_by_id->post ?>"name="post" id="post" >
         </br>
<label for="image"><b>Add NEW Member Image</b></label></br>
       <input type="file" name="image" id="image" >
         </br>
         </br>

 
   
   
    <input type="hidden" value="<?php echo $all_team_by_id->id ?>"name="id" id="id" ></br>

   
  
    <label for="fbimage"><b>Add NEW Facebook Image</b></label></br>
       <input type="file" name="fbimage" id="fbimage" >
         </br>
         </br>

    <label for="yimage"><b>Add NEW Youtube Image</b></label></br>
       <input type="file" name="yimage" id="yimage" >
         </br>
         </br>

    <label for="gimage"><b>Add NEW Google Image</b></label></br>
       <input type="file" name="gimage" id="gimage" >
         </br>
         </br>

    <label for="timage"><b>Add NEW Twitter Image</b></label></br>
       <input type="file" name="timage" id="timage" >
         </br>
         </br>

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
