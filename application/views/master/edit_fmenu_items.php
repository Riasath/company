<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>




<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
	
<div class="container-fluid">
<div class="left" style="float: left;">
	<form action="<?php echo base_url()?>update-fmenu" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="mobile"><b>Edit Mobile </b></label></br>
    <input type="text"  name="mobile" id="mobile" value="<?php echo $all_fmenu_by_id->mobile?>"></br>
    
      <label for="id"><b></b></label></br>
    <input type="hidden"  name="id" id="id" value="<?php echo $all_fmenu_by_id->id?>"></br>

    <label for="gmail"><b>Edit Gmail</b></label></br>
    <input type="text"  name="gmail" id="gmail"
     value="<?php echo $all_fmenu_by_id->gmail?>"></br>

    <label for="address"><b>Edit Address</b></label></br>
    <input type="text"  name="address" id="address"
     value="<?php echo $all_fmenu_by_id->address?>"></br>

 



  



    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
</body>
</html>