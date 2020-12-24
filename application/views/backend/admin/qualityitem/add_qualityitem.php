<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Quality Items</h3>
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
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-qualityitem" method="post" enctype="multipart/form-data">
                               

   
     <div class="row">
     <div class="col-md-6">
        <h4>Qualityitem Title</h4>
         <input type="text"  class="form-control" placeholder="Enter Qualityitem title" name="title" id="title" required>
     </div>

     <div class="col-md-6">
        <h4>  Qualityitem Value(Example 10/ 50/ 90)</h4>
         <input type="text"  class="form-control" placeholder="Enter Qualityitem Value" name="value" id="value" required>
     </div>
   
    </div>  
         <button type="submit" style="margin:20px; " class="btn btn-danger">Submit</button></br>                      
         </form>
                        
                    

               
            </section>
        </div>
        <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>


            </div>
             <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/qualityitem.png">
        </div>

    </div>

</div>

<!-- /.card-body -->