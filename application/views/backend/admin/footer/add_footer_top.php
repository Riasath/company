<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>RTSOFTBD</title>




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
                        <h3 class="card-title">Add New Footer top</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/footer_top') ?>">
                            <button type='button' id="" class='btn bg-success'>
                            Footer Top</i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
    

<div class="left">
    <form action="<?php echo base_url()?>save-footer-heading" method="post" enctype="multipart/form-data">
  <div class="container">
   <label for="footer_heading"><b>Add Footer Heading</b></label></br>
    <input type="text"  name="footer_heading" id="footer_heading" required></br>
    <label for="text-area"><b>Add Footer  Details</b></label></br>
    <textarea class="form-control rounded-0"  name="footer_details" id="exampleFormControlTextarea2" rows="3"></textarea>
 
    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>
</body>
</html>
