
  
<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-danger">
      <div class="card-header" style="">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Simply Team</h3>
          </div>
          

        </div>

      </div>
  <form action="<?php echo base_url()?>update-team" method="post" enctype="multipart/form-data">

     <div class="row">
       <div class="col-md-6">
            <h4>Add Member Name</h4>
       <input type="text"class="form-control" value="<?php echo $all_team_by_id->name ?>"name="name" id="name" >
      
       </div>
       <input type="hidden" value="<?php echo $all_team_by_id->id ?>"name="id" id="id" >
       <div class="col-md-6">
         <h4>Recent Member Image</h4>
       <img class="img-fluid" style="height:90px;width:90px;" src="<?php echo base_url().$all_team_by_id->image?>">
       </div>

       <div class="col-md-6">
         <h4>Upload Member Image(Must be width210px and height 231px)</h4>
            <input type="file"class="form-control" name="image" id="image" >
       
       </div>
        <div class="col-md-6">
         <h4>Upload Facebook Image(Must be width200px and height 140px)</h4>
            <input type="file"class="form-control" name="fbimage" id="fbimage" >
       
       </div>

      <div class="col-md-6">
         <h4>Upload Youtube Image(Must be width200px and height 140px)</h4>
            <input type="file"class="form-control" name="yimage" id="yimage" >
       
       </div>
        <div class="col-md-6">
         <h4>Upload Google Image(Must be width200px and height 140px)</h4>
            <input type="file"class="form-control" name="gimage" id="gimage" >
       
       </div>
        <div class="col-md-6">
         <h4>Upload Twitter Image(Must be width200px and height 140px)</h4>
            <input type="file"class="form-control" name="timage" id="timage" >
       
       </div>
       <div class="col-md-6">
            <h4>Add Facebook link</h4>
       <input type="text"class="form-control" value="<?php echo $all_team_by_id->fblink ?>"name="fblink" id="fblink" >
      
       </div>
       <div class="col-md-6">
            <h4>Add Youtube link</h4>
       <input type="text"class="form-control" value="<?php echo $all_team_by_id->ylink ?>"name="ylink" id="ylink" >
      
       </div>
       <div class="col-md-6">
            <h4>Add Google link</h4>
       <input type="text"class="form-control" value="<?php echo $all_team_by_id->glink ?>"name="glink" id="glink" >
      
       </div>
       <div class="col-md-6">
            <h4>Add Twitter link</h4>
       <input type="text"class="form-control" value="<?php echo $all_team_by_id->tlink ?>"name="tlink" id="tlink" >
      
       </div>
     </div>
       <button type="submit" style="margin:20px;"class="btn btn-danger">Update</button></br>
      

</form>

</div>
</div>
</div>



