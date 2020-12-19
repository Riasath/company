
<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-primary">
      <div class="card-header" style="background:#117A8B; ">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Edit Feedback</h3>
          </div>

        </div>

      </div>
  <form action="<?php echo base_url()?>update-feedback" method="post" enctype="multipart/form-data">

  <div class="row">
  <div class="col-md-6">
      <h4>Add Author Name</h4> 
    <input type="text" class="form-control"  name="author" id="author"
     value="<?php echo $all_feedback_by_id->author?>"></br>
    </div>
     <input type="hidden"  name="id" id="id" value="<?php echo $all_feedback_by_id->id?>">
    <div class="col-md-6">
          <h4>Add Author Market</h4> 
    <input type="text" class="form-control" name="market" id="market" 
     value="<?php echo $all_feedback_by_id->market?>"></br>
    </div>
    <div class="col-md-7">
      <h4>Add Feedback description</h4> 
   
    <textarea class="form-control"  rows="4" cols="70"  name="description" id="description"  value=""><?php echo $all_feedback_by_id->description?></textarea>
     
    </div>
    <div class="col-md-6">
       <h4>Recent Author Image</h4> 
    <img src="<?php echo base_url().$all_feedback_by_id->image ?>">
    </div>
    <div class="col-md-6">
      <h4>Add NEW Author Image(maximum width120px and height 90px;)</h4>  
    <input type="file" class="form-control" name="image" id="image" 
     >
    </div>
    
  </div>
   
  <button type="submit" class="btn btn-info" style="margin:20px; ">Update</button></br>
   

  </form>

</div>
</div>
</div>


