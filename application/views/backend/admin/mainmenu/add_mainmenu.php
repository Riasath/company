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
            <h3 class="card-title">Project Main Menu</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/mainmenu') ?>">
              <button type='button' id="" class='btn bg-success'>Main Menu</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-mainmenu" method="post" enctype="multipart/form-data">
  <div class="container">
   


      


      <label for="m_name"><b>Main Menu Name</b></label></br>
      <input type="text" placeholder="" name="m_name" id="m_name" required></br>


      <label for="url"><b>Main Menu URL</b></label></br>
     <input type="text" placeholder="" name="m_url" id="m_url" required></br>
    
      <label for="description"><b>Main Menu Description</b></label></br>
     <input type="text" placeholder="" name="m_desc" id="m_desc" required></br>

     
    

    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</body>
</html>