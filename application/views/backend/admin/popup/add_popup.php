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
                        <h3 class="card-title">Add PopUp content</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/popup') ?>">
                            <button type='button' id="" class='btn bg-success'>
                            PopUp content  </i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
	

<div class="roght" style="float: right;margin-right: 250px;">
	<form action="<?php echo base_url()?>save-popup" method="post" enctype="multipart/form-data">
  <div class="container">
   



    <label for="mobile"><b>Add Mobile Number</b></label></br>
    <input type="text"  name="mobile" id="mobile" required></br>

    <label for="gmail"><b>Add Gmail </b></label></br>
    <input type="text"  name="gmail" id="gmail" required></br>

    <label for="day"><b>Add Day </b></label></br>
    <input type="text"  name="day" id="day" required></br>

       <label for="time"><b>Add Time </b></label></br>
    <input type="text"  name="time" id="time" required></br>
  
    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>

</html>
