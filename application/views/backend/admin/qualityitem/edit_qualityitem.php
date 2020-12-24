
  
<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-danger">
      <div class="card-header" style="">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Quality Item</h3>
          </div>
          

        </div>

      </div>
  <form action="<?php echo base_url()?>update-qualityitem" method="post" enctype="multipart/form-data">

     <div class="row">
       <div class="col-md-6">
            <h4>Add Quality Item Title</h4>
       <input type="text"class="form-control" value="<?php echo $all_qualityitem_by_id->title ?>"name="title" id="title" >
      
       </div>
       <input type="hidden" value="<?php echo $all_qualityitem_by_id->id ?>"name="id" id="id" >
      <div class="col-md-6">
            <h4>Add Quality Item Value</h4>
       <input type="text"class="form-control" value="<?php echo $all_qualityitem_by_id->value ?>"name="value" id="value" >
      
       </div>

     </div>
       <button type="submit" style="margin:20px;"class="btn btn-danger">Update</button></br>
      

</form>

</div>
</div>
</div>



