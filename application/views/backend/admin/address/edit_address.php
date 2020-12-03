
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>




<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
	
<div class="content-wrapper">
	<form action="<?php echo base_url()?>update-address" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="title"><b>Edit Title </b></label></br>
    <input type="text"  name="title" id="title" value="<?php echo $all_address_by_id->title?>"></br>
    
      <label for="id"><b></b></label></br>
    <input type="hidden"  name="id" id="id" value="<?php echo $all_address_by_id->id?>"></br>

    <label for="house"><b>Edit House</b></label></br>
    <input type="text"  name="house" id="house"
     value="<?php echo $all_address_by_id->house?>"></br>

    <label for="cellnum"><b>Edit Cell Number</b></label></br>
    <input type="text"  name="cellnum" id="cellnum"
     value="<?php echo $all_address_by_id->cellnum?>"></br>

        <label for="officenum"><b>Edit Office Number</b></label></br>
    <input type="text"  name="officenum" id="officenum"
     value="<?php echo $all_address_by_id->officenum?>"></br>

       <label for="supportnum"><b>Edit Support Number </b></label></br>
    <input type="text"  name="supportnum" id="supportnum"
     value="<?php echo $all_address_by_id->supportnum?>"></br>

       <label for="gmail"><b>Edit Gmail</b></label></br>
    <input type="text"  name="gmail" id="gmail"
     value="<?php echo $all_address_by_id->gmail?>"></br>

            <label for="address"><b>Edit Address</b></label></br>
    <input type="text"  name="address" id="address"
     value="<?php echo $all_address_by_id->address?>"></br>

 



  



    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
