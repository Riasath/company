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
            <h3 class="card-title">Qualityitem</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/qualityitem') ?>">
              <button type='button' id="" class='btn bg-success'>Our Qualityitem</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-qualityitem" method="post" enctype="multipart/form-data">
  <div class="container">
   


      


      <label for="title"><b>Qualityitem Title</b></label></br>
      <input type="text" placeholder="" name="title" id="title" required></br>


      <label for="value"><b>Qualityitem Value(Example 10/ 50/ 90)</b></label></br>
      <input type="text" placeholder="" name="value" id="value" required></br>
     
   
    

    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</body>
</html>