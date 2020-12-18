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
            <h3 class="card-title">Testimonial Heading</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/testimonial_head') ?>">
              <button type='button' id="" class='btn bg-success'>Testimonial Heading</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-testimonial-head" method="post" enctype="multipart/form-data">
  <div class="container">
   


      


      <label for="title"><b>Testimonial Heading Title</b></label></br>
      <input type="text" placeholder="" name="title" id="title" required></br>


      <label for="details"><b>Testimonial Heading Details</b></label></br>
     

       <textarea style="background:#F1F1F1;" type="text" rows="4" cols="70"  name="details" id="details"required >
         
       </textarea></br>

   
    

    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</body>
</html>