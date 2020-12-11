
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-dropdown" method="post" enctype="multipart/form-data">
  <div class="container">
  


    <label for="m_id"><b>Add Main Menu ID </b></label></br>
       <input type="text" value="<?php echo $all_dropdown_info_by_id->m_id ?>"name="m_id" id="m_id" >
         </br>
          <label for="m_item_name"><b>Add Dropdown Menu Name</b></label></br>
       <input type="text" value="<?php echo $all_dropdown_info_by_id->m_item_name ?>"name="m_item_name" id="m_item_name" >
         </br>
 
   
   
    <input type="hidden" value="<?php echo $all_dropdown_info_by_id->m_item_id ?>"name="m_item_id" id="m_item_id" ></br>

    
          <label for="url"><b>Add Dropdown Menu URL</b></label></br>
       
         <input type="text" value="<?php echo $all_dropdown_info_by_id->m_item_url ?>"name="m_item_url" id="m_item_url" >
         </br>
         <label for="desc"><b>Add Dropdown Menu Description</b></label></br>
       
         <input type="text" value="<?php echo $all_dropdown_info_by_id->m_item_url ?>"name="m_item_url" id="m_item_url" >
         </br>
         <label for="time"><b>Add Dropdown Menu Created Time</b></label></br>
       
         <input type="text" value="<?php echo $all_dropdown_info_by_id->m_item_created_at ?>"name="m_item_created_at" id="m_item_created_at" >
         </br>
        
  
   

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
