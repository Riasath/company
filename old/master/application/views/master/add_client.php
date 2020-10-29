<!DOCTYPE html>
<html>
<head>
	

  <title>RTSOFTBD- Software and System Design</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>





<body>
<div class="left" style="float: left;">
	<form action="<?php echo base_url()?>save-client-image" method="post" enctype="multipart/form-data">
  <div class="container">
  


   
    <label for="client_image"><b>Add Client Image</b></label></br>
     </br>
         </br>
       <input type="file" name="client_image" id="client_image" >
         </br>
         </br>
         </br>

   
    

   
  

    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>





</div>
<div id="right" style="float: right;">
  <p style="margin-top:60px;margin-right:500px;">
      <a  href="<?= base_url();?>client-image"><button type="button"class="btn btn-danger">Manage Image</button></a>
    

      </p>
</div>
</body>
</html>