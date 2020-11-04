<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>


	<title>RTSOFTBD- Software and System Design</title>
 

</head>
<body>
<div class="left">
	<form action="<?php echo base_url()?>update-slider" method="post" enctype="multipart/form-data">
  <div class="container">
  
<table style="margin-top: 40px;" class="table table-striped table-bordered bootstarp-datatale datatable">


  <thead>
    <tr>
    <th> FOOTER ID</th>
    <th>FOOTER HEADING</th>
    <th> FOOTER DETAILS</th>
   
  </tr>
    <tbody>
      <tr>
      <td>
      <h4><?php echo $all_footertop_view_by_id->footer_id ?></h4>

      </td>
      <td>
        <h4>
          <?php echo $all_footertop_view_by_id->footer_heading ?>
        </h4>
        
      </td>
      <td>
      <h4><?php echo $all_footertop_view_by_id->footer_details ?></h4>

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
