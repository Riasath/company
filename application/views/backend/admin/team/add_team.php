<!DOCTYPE html>
<html>
<head>
  <title></title>





<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
  

<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-primary">
      <div class="card-header">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Team</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/team') ?>">
              <button type='button' id="" class='btn bg-success'>Our Team</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-team" method="post" enctype="multipart/form-data">
  <div class="container">
   


      


      <label for="name"><b>Team Member Name</b></label></br>
      <input type="text" placeholder="" name="name" id="name" required></br>


      <label for="post"><b>Team Member Post</b></label></br>
      <input type="text" placeholder="" name="post" id="post" required></br>
    
    

     <label for="image"><b>Upload Team Member Image</b></label></br>
      <input type="file" placeholder="" name="image" id="image" required>
      </br>
       <label for="fbimage"><b>Upload Team Member Facebook Image</b></label></br>
      <input type="file" placeholder="" name="fbimage" id="fbimage" required>
      </br>
       <label for="yimage"><b>Upload Team Member Youtube Image</b></label></br>
      <input type="file" placeholder="" name="yimage" id="yimage" required>
      </br>
       <label for="gimage"><b>Upload Team Member Google Image</b></label></br>
      <input type="file" placeholder="" name="gimage" id="gimage" required>
      </br>
       <label for="timage"><b>Upload Team Member Twitter Image</b></label></br>
      <input type="file" placeholder="" name="timage" id="timage" required>
      </br>
      



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</body>
</html>