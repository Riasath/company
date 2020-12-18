
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-counter" method="post" enctype="multipart/form-data">
  <div class="container">
  


    <label for="title"><b>Add counter Title</b></label></br>
       <input type="text" value="<?php echo $all_counter_by_id->title ?>"name="title" id="title" >
         </br>

           <input type="hidden" value="<?php echo $all_counter_by_id->id ?>"name="id" id="id" ></br>

         <label for="title"><b>Add counter value</b></label></br>
       <input type="text" value="<?php echo $all_counter_by_id->value ?>"name="value" id="value" >
         </br>

         <label for="title"><b>Add counter units</b></label></br>
       <input type="text" value="<?php echo $all_counter_by_id->units ?>"name="units" id="units" >
         </br>

         <label for="title"><b>Add counter data</b></label></br>
       <input type="text" value="<?php echo $all_counter_by_id->data ?>"name="data" id="data" >
         </br>
 
   
   
   

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
