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
                        <h3 class="card-title">Add New Copyright</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/footer') ?>">
                            <button type='button' id="" class='btn bg-success'>
                            Copyright</i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
	

<div class="left" style="float:right;margin-right:175px;">
	<form action="<?php echo base_url()?>save-footer-copyright" method="post" enctype="multipart/form-data">
  <div class="container">
   



    <label for="year"><b>Add Year</b></label></br>
    <input type="text"  name="year" id="year" required></br>
    <label for="company_name"><b>Add Company Name</b></label></br>
    <input type="text"  name="company_name" id="company_name" required>
  </br>
   <label for="design"><b>Add Designed By</b></label></br>
    <input type="text"  name="design" id="design" required>
  </br>
   <label for="developed"><b>Add Developed By</b></label></br>
    <input type="text"  name="developed" id="developed" required>
  </br>
   <label for="only_on"><b>Add Only ON</b></label></br>
    <input type="text"  name="only_on" id="only_on" required>
  </br>
    



    <button type="submit" class="registerbtn">Submit</button></br>

   
  </div>
</form>
</div>
</div>




</body>
</html>
</body>
</html>