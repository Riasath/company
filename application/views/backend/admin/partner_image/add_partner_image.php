
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#23272B; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Partner image</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/partner_image') ?>">
                            <button type='button' id="" class='btn bg-success'>Partner</i>
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
             
        <form action="<?php echo base_url() ?>save-partner-image" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     
     <div class="col-md-6">
        <h4>Add Partner Image(Maximum height 210px and width 127px)</h4>
         <input type="file" class="form-control" name="image" id="image" required>
     </div>

     

   

        </div>  
         <button type="submit" style="margin:15px;" class="btn btn-dark">Submit</button></br>                      
         </form>
                        
                    

               
            </section>
       
        <div class="card-header" style="background:#23272B; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>


            </div>
          <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/partnerimage.png">
          

          
        </div>

          
    </div>

</div>

<!-- /.card-body -->