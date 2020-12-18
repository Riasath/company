
	
<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-primary">
      <div class="card-header" style="background:#138496; ">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Simply Edit Testimonials</h3>
          </div>
          

        </div>

      </div>
	<form action="<?php echo base_url()?>update-testimonials-list" method="post" enctype="multipart/form-data">

     <div class="row">
       <div class="col-md-6">
            <h4>Edit Testimonials Text</h4> 
       <textarea  class="form-control" rows="4" cols="70"  name="testi_text" id="testi_text" value=""><?php echo $all_testimonials_list_by_id->testi_text?></textarea>
      
       </div>
       <input type="hidden"  name="testi_id" id="testi_id" value="<?php echo $all_testimonials_list_by_id->testi_id?>"></br>
       <div class="col-md-6">
         <h4>Edit Testimonials Author</h4> 
    <input type="text"  name="testi_author" class="form-control" id="testi_author"
     value="<?php echo $all_testimonials_list_by_id->testi_author?>">
       </div>
       <div class="col-md-6">
         <h4>Edit Testimonials Company</h4> 
    <input type="text" name="testi_company" class="form-control" id="testi_company" 
     value="<?php echo $all_testimonials_list_by_id->testi_company?>">
       </div>
     </div>
      
     <button type="submit" style="margin:20px; " class="btn btn-info" >Update</button></br>
   

</form>

</div>
</div>
</div>



