<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
  

<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-primary">
      <div class="card-header">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Project Dropdown Menu</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/dropdown') ?>">
              <button type='button' id="" class='btn bg-success'>Dropdown Item</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-dropdown" method="post" enctype="multipart/form-data">
  <div class="container">
   


      
      <label for="m_id"><b>Main Menu Id</b></label></br>
      <input type="text" placeholder="" name="m_id" id="m_id" required></br>


      <label for="m_item_name"><b>Dropdown Item Menu Name</b></label></br>
      <input type="text" placeholder="" name="m_item_name" id="m_item_name" required></br>


      <label for="m_item_url"><b>Dropdown Item  Menu URL</b></label></br>
     <input type="text" placeholder="" name="m_item_url" id="m_item_url" required></br>
    
      <label for="desc"><b>Dropdown Item  Menu Description</b></label></br>
     <input type="text" placeholder="" name="m_item_desc" id="m_item_desc" required></br>

     
    

    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</body>
</html>