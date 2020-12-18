<!DOCTYPE html>
<html>
<head>
	

  <title>RTSOFTBD- Software and System Design</title>
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
                        <h3 class="card-title">Add New Logo</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/logo') ?>">
                            <button type='button' id="" class='btn bg-success'>All Logo</i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
<div class="left" style="float:right;margin-right: 450px;">
	<form action="<?php echo base_url()?>save-logo" method="post" enctype="multipart/form-data">
  <div class="container">
  


   
    <label for="image"><b>Add Logo </b></label></br>
     </br>
         </br>
       <input type="file" name="image" id="image" >
         </br>
         </br>
         </br>

   
    

   
  

    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>





</div>

</body>
</html>