
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD- Software and System Design</title>

<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
  <form action="<?php echo base_url()?>update-mainmenu" method="post" enctype="multipart/form-data">
  <div class="container">
  


    <label for="m_name"><b>Add Mainmenu Name</b></label></br>
       <input type="text" value="<?php echo $all_mainmenu_by_id->m_name ?>"name="m_name" id="m_name" >
         </br>
 
   
   
    <input type="hidden" value="<?php echo $all_mainmenu_by_id->m_id ?>"name="m_id" id="m_id" ></br>

    
          <label for="url"><b>Add Mainmenu URL</b></label></br>
     <input type="text" value="<?php echo $all_mainmenu_by_id->m_url ?>"name="m_url" id="m_url" >
         </br>

          <label for="desc"><b>Add Mainmenu Description</b></label></br>
     <input type="text" value="<?php echo $all_mainmenu_by_id->m_desc ?>"name="m_desc" id="m_desc" >
         </br>
   

    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>
</div>
</div>





</div>
</body>
</html>
