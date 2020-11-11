<!DOCTYPE html>
<html>
<head>
	<title></title>





<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css')?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" media='all'>
</head>
<body>
	<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Add New Testimonials</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/testimonials') ?>">
                            <button type='button' id="" class='btn bg-success'>Testimonial</i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
<div class="container-fluid">
<div class="left" style="float: right;margin-right: 150px;">
	<form action="<?php echo base_url()?>save-testimonials-list" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="testi_text"><b>Add Testimonials Text</b></label></br>
    <input type="text"  name="testi_text" id="testi_text" required></br>
    

    <label for="testi_author"><b>Add Testimonials Author</b></label></br>
    <input type="text"  name="testi_author" id="testi_author" required></br>

    <label for="testi_company"><b>Add Testimonials Company</b></label></br>
    <input type="text" name="testi_company" id="testi_company" required></br>
 



  



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
</body>
</html>