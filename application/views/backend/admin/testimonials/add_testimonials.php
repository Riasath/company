
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Testimonials</h3>
                    </div>
                    <div class="col-md-2">
            <a href="<?php echo base_url('Admin/testimonials') ?>">
              <button type='button' id="" class='btn bg-info'>All Testimonials</i>
              </button></a>
          </div>
                </div>


            </div>

            <?= alert_check() ?>
             <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-info'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
            <section class="content" style="margin-top:20px">
             
        <form action="<?php echo base_url() ?>save-testimonials-list" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     
 <div class="col-md-6">
        <h4>Add Author Name</h4>
         <input type="text" class="form-control"placeholder="Enter Testimonials Author Name " name="testi_author" id="testi_author" required>
     </div> 
      <div class="col-md-6">
        <h4>Add Company Name</h4>
         <input type="text" class="form-control" placeholder="Company Name " name="testi_company" id="testi_company" required>
     </div>
     <div class="col-md-8">
        <h4>Add Text</h4>
         <textarea type="text" rows="4" cols="60" class="form-control"  name="testi_text" id="testi_text" placeholder="Enter testimonial text" required ></textarea>
             
      </div>
        
       

   

        </div>  
         <button type="submit" style="margin:15px;" class="btn btn-danger">Submit</button></br>                      
         </form>
                        
                    

               
            </section>
       
        <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>


            </div>
          <img style="" class="img-fluid"  src="<?php echo base_url('assets')?>/images/testimonials.png">
          

          
        </div>

          
    </div>

</div>

<!-- /.card-body -->