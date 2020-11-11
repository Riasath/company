<!DOCTYPE html>
<html>
<head>
	<title></title>





<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css
');?>" media='all'>
</head>
<body>
    <div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Add  Footer Bottom</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/footer_bottom') ?>">
                            <button type='button' id="" class='btn bg-success'>
                            Footer </i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
	

<div class="roght" style="float: right;margin-right: 250px;">
	<form action="<?php echo base_url()?>save-footerbottom" method="post" enctype="multipart/form-data">
  <div class="container">
   



    <label for="mobile"><b>Add Mobile Number</b></label></br>
    <input type="text"  name="mobile" id="mobile" required></br>

    <label for="gmail"><b>Add Footer Gmail </b></label></br>
    <input type="text"  name="gmail" id="gmail" required></br>

    <label for="address"><b>Add Footer Address </b></label></br>
    <input type="text"  name="address" id="address" required></br>
  
    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>

</html>
