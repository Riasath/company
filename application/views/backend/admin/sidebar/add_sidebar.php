<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-primary">
      <div class="card-header">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Sidebar</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/sidebar') ?>">
              <button type='button' id="" class='btn bg-success'>All Sidebar</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-sidebar" method="post" enctype="multipart/form-data">
  <div class="container">


      <label for="title"><b>Title</b></label></br>
      <input type="text"  class="form-control"placeholder="" name="title" id="title" required></br>


      <label for="details"><b> Details</b></label></br>
    
      <textarea style="background:#F1F1F1;" rows="4" cols="60"  name="details" id="details" class="form-control" required ></textarea>
       </br>

   <label for="image"><b>Upload Company Logo</b></label></br>
      <input type="file" class="form-control" placeholder="" name="image" id="image" required>
      </br>
      </br>

       <label for="mobile"><b>Mobile</b></label></br>
      <input type="text" class="form-control" placeholder="" name="mobile" id="mobile" required></br>

       <label for="gmail"><b>Gmail</b></label></br>
      <input type="text" class="form-control" placeholder="" name="gmail" id="gmail" required></br>

       <label for="address"><b>Address</b></label></br>
      <input type="text" class="form-control" placeholder="" name="address" id="address" required></br>
    
    
    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
