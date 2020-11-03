<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
   <div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Add  Footer Icon</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/footer_icon') ?>">
                            <button type='button' id="" class='btn bg-success'>
                            Footer Icon </i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
<div class="left">
	<form action="<?php echo base_url()?>save-footericon" method="post" enctype="multipart/form-data">
  <div class="container">
   
    <label for="footer_images"><b>Add Footer Icon</b></label></br>
     </br>
         </br>
       <input type="file" name="footer_images" id="footer_images" >
         </br>
         </br>
         </br>


    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>

</body>
</html>
