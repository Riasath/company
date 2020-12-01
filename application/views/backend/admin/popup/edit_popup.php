
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>




<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
	
<div class="content-wrapper">
	<form action="<?php echo base_url()?>update-popup" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="mobile"><b>Edit Mobile </b></label></br>
    <input type="text"  name="mobile" id="mobile" value="<?php echo $all_popup_by_id->mobile?>"></br>
    
      <label for="id"><b></b></label></br>
    <input type="hidden"  name="id" id="id" value="<?php echo $all_popup_by_id->id?>"></br>

    <label for="gmail"><b>Edit Gmail</b></label></br>
    <input type="text"  name="gmail" id="gmail"
     value="<?php echo $all_popup_by_id->gmail?>"></br>

    <label for="day"><b>Edit Day</b></label></br>
    <input type="text"  name="day" id="day"
     value="<?php echo $all_popup_by_id->day?>"></br>

        <label for="time"><b>Edit Time</b></label></br>
    <input type="text"  name="time" id="time"
     value="<?php echo $all_popup_by_id->time?>"></br>

 



  



    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
