<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
	<form action="<?php echo base_url()?>update-slider" method="post" enctype="multipart/form-data">
  <div class="container">
  
<table style="margin-top: 40px;"class="table table-striped table-bordered bootstarp-datatale datatable">


  <thead>
    <tr>
    <th>Slider Title</th>
    <th> Slider Details</th>
    <th>Slider Image</th>
  </tr>
    <tbody>
      <tr>
      <td>
      <h1><?php echo $all_slider_view_by_id->slider_descriptions ?></h1>
  <input type="hidden" value="<?php echo $all_slider_view_by_id->slider_id ?>"name="slider_id" id="slider_id" ></br>
      </td>
      <td>
        <h4>
          <?php echo $all_slider_view_by_id->slider_about ?>
        </h4>
        
      </td>
      <td>
         <label for="slider_image"><b>Slider Image</b></label></br>
    <img src="<?php echo base_url().$all_slider_view_by_id->slider_image?>" style="height:300px;width:300px;border:1px solid #FC4136;">
      </td>
      <tr/>
    </tbody>
  </thead>
</table>




















  
  
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
</body>
</h