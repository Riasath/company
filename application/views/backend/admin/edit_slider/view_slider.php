<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
   <div class="content-wrapper">

  




 
   
    <h1 style="background: gray;">Slider Title</h1>
   <h3><?php echo $all_slider_view_by_id->slider_descriptions ?></h3>
   <h1 style="background: gray;">Slider Details</h1> 
    <h3><?php echo $all_slider_view_by_id->slider_about ?> </h3>
    <h1>Slider Image</h1>
  <img src="<?php echo base_url().$all_slider_view_by_id->slider_image?>" style="height:150px;width:200px;border:1px solid #FC4136;">
    
  
 


</div>
</body>
</html>
