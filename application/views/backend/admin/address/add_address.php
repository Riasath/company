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
                        <h3 class="card-title">Add Contact Address</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/address') ?>">
                            <button type='button' id="" class='btn bg-success'>
                            Address </i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
	

<div class="roght" style="float: right;margin-right: 250px;">
	<form action="<?php echo base_url()?>save-address" method="post" enctype="multipart/form-data">
  <div class="container">
   



    <label for="title"><b>Add Title</b></label></br>
    <input type="text"  name="title" id="title" required></br>

    <label for="house"><b>Add House</b></label></br>
    <input type="text"  name="house" id="house" required></br>

     <label for="cellnum"><b>Add Cell Number</b></label></br>
<input type="text"  name="cellnum" id="cellnum" required></br>

 <label for="officenum"><b>Add Office Number</b></label></br>
    <input type="text"  name="officenum" id="officenum" required></br>

     <label for="supportnum"><b>Add Support Number</b></label></br>
    <input type="text"  name="supportnum" id="supportnum" required></br> 

 <label for="gmail"><b>Add Footer Gmail </b></label></br>
    <input type="text"  name="gmail" id="gmail" required></br>

    <label for="address"><b>Add Address </b></label></br>
    <input type="text"  name="address" id="address" required></br>

    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>

</html>
