
  <div class="content-wrapper">
  
  <div class="card-body">
    <div class="card card-info">
      <div class="card-header" >
        <div class="row">
            <div class="col-md-10">
          <div class="card-title">
        
             <h4>Edit Main Slider Items </h4>
            
          </div>
        </div>
                   </div>


      </div>

   <form action="<?php echo base_url()?>update-slider-list" method="post" enctype="multipart/form-data">
<div class="row">
      <div class="col-md-6">
          <h4>Recent slider Image</h4>
      <img src="<?php echo base_url().$all_slider_info_by_id->slider_image?>" style="height:200px;width:300px;border:1px solid #000000;">
     </br>
   </div>
  <div class="col-md-6">
    <h4>Add Slider Title</h4> 
    <input type="text" class="form-control" value="<?php echo $all_slider_info_by_id->slider_descriptions ?>"name="slider_descriptions" id="slider_descriptions" >
  </div>
  <input type="hidden" class="form-control"value="<?php echo $all_slider_info_by_id->slider_id ?>"name="slider_id" id="slider_descriptions" ></br>
  <div class="col-md-8">
  <h4>Add Slider Details</h4>
    <textarea style="background:#F1F1F1;"class="form-control" rows="3" cols="70" value=""name="slider_about">
      <?php echo $all_slider_info_by_id->slider_about ?>
    </textarea>
</div>
<div class="col-md-4">
   <h4>Add NEW Slider Image</h4> 
       <input type="file" class="form-control"name="slider_image" id="slider_image" >
</div>
</div>
      



   
   <button type="submit"  style="margin:20px; "class="btn btn-info" >Update</button></br>
   

</form>


</div>







