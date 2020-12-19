
<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-primary">
      <div class="card-header" style="background:#117A8B; ">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Edit Partner</h3>
          </div>

        </div>

      </div>
  <form action="<?php echo base_url()?>update-partner-image" method="post" enctype="multipart/form-data">

  <div class="row">
   <div class="col-md-6">
       <h4>Recent Partner Image</h4> 
    <img src="<?php echo base_url().$all_partner_image_by_id->image ?>">
    </div>
      <input type="hidden"  name="id" id="id" value="<?php echo $all_partner_image_by_id->id?>">
    <div class="col-md-6">
      <h4>Add NEW Partner Image(maximum width170px and height 120px;)</h4>  
    <input type="file" class="form-control" name="image" id="image" 
     >
    </div>
    
  </div>
   
  <button type="submit" class="btn btn-info" style="margin:20px; ">Update</button></br>
   

  </form>

</div>
</div>
</div>


