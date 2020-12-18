
<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-primary">
      <div class="card-header" style="background:#117A8B; ">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Edit Blog Post</h3>
          </div>

        </div>

      </div>
	<form action="<?php echo base_url()?>update-blog-list" method="post" enctype="multipart/form-data">

  <div class="row">
    <div class="col-md-6">
       <h4>Old Date</h4> 
    <input type="text" class="form-control"  name="date" id="date" value="<?php echo $all_blog_list_by_id->date?>">
    </div>
    <div class="col-md-6">
       <h4>Enter New Date</h4> 
    <input type="date"  class="form-control" name="date" id="date" >
    </div>
    <input type="hidden"  name="id" id="id" value="<?php echo $all_blog_list_by_id->id?>">
    <div class="col-md-6">
      <h4>Edit Blog Title</h4> 
    <input type="text" class="form-control"  name="blog_title" id="blog_title"
     value="<?php echo $all_blog_list_by_id->blog_title?>"></br>
    </div>
    <div class="col-md-6">
          <h4>Edit Posted By</h4> 
    <input type="text" class="form-control" name="posted_by" id="posted_by" 
     value="<?php echo $all_blog_list_by_id->posted_by?>"></br>
    </div>
    <div class="col-md-7">
      <h4>Edit Blog Details</h4> 
   
    <textarea class="form-control"  rows="4" cols="70"  name="blog_details" id="blog_details"  value=""><?php echo $all_blog_list_by_id->blog_details?></textarea>
     
    </div>
    <div class="col-md-6">
       <h4>recent  Blog Avatar</h4> 
    <img src="<?php echo base_url().$all_blog_list_by_id->avatar ?>">
    </div>
    <div class="col-md-6">
      <h4>Upload Avatar(maximum width70px and height 70px;)</h4>  
    <input type="file" class="form-control" name="avatar" id="avatar" 
     >
    </div>
    
  </div>
   
  <button type="submit" class="btn btn-info" style="margin:20px; ">Update</button></br>
   

  </form>

</div>
</div>
</div>


