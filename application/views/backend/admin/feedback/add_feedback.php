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
            <h3 class="card-title">Promo</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/promo') ?>">
              <button type='button' id="" class='btn bg-success'>All Promo</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-feedback" method="post" enctype="multipart/form-data">
  <div class="container">
   

   
      <label for="description"><b>Feedback Description</b></label></br>
      <input type="text" placeholder="" name="description" id="description" required></br>

      <label for="image"><b>Upload Author Image</b></label></br>
      <input type="file" placeholder="" name="image" id="image" required>
      </br>
      </br>
      <label for="author"><b>Author Name</b></label></br>
      <input type="text" placeholder="" name="author" id="author" required></br>
       <label for="market"><b>Author Market</b></label></br>
      <input type="text" placeholder="" name="market" id="market" required>

    
    


    
    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</body>
</html>