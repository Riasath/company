<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD</title>




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
            <h3 class="card-title">Foundation</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/foundation') ?>">
              <button type='button' id="" class='btn bg-success'>Foundation</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-foundation" method="post" enctype="multipart/form-data">
  <div class="container">
   



     <label for="foundation_image"><b>Upload Foundation Image</b></label></br>
      <input type="file" placeholder="" name="foundation_image" id="foundation_image" required>
      </br>
      </br>
      </br>
      <label for="foundation_date"><b>Foundation Date</b></label></br>
      <input type="date" placeholder="" name="date" id="foundation_date" required></br>


      <label for="foundation_title"><b>Foundation Title</b></label></br>
      <input type="text" placeholder="" name="foundation_title" id="foundation_title" required></br>


      <label for="foundation_details"><b>Foundation Details</b></label></br>
      <input type="text" placeholder="" name="foundation_details" id="foundation_details" required></br>
    
    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</body>
</html>