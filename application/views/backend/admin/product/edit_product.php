
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-product" method="post" enctype="multipart/form-data">
  <div class="container">
  


    <label for="title"><b>Add Product Title</b></label></br>
       <input type="text" value="<?php echo $all_product_by_id->title ?>"name="title" id="title" >
         </br>
 
   
   
    <input type="hidden" value="<?php echo $all_product_by_id->id ?>"name="id" id="id" ></br>

    
          <label for="details"><b>Add Product Details</b></label></br>
       <input type="text" value="<?php echo $all_product_by_id->details ?>"name="details" id="details" >
         </br>

          <label for="section1"><b>Add Product Section1</b></label></br>
       <input type="text" value="<?php echo $all_product_by_id->section1 ?>"name="section1" id="section1" >
         </br>
  

          <label for="section2"><b>Add Product Section2</b></label></br>
       <input type="text" value="<?php echo $all_product_by_id->section2 ?>"name="section2" id="section2" >
         </br>
  
  
   

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
