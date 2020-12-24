<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Conter</h3>
                    </div>
                     <div class="col-md-2">
            <a href="<?php echo base_url('Admin/counter') ?>">
              <button type='button' id="" class='btn bg-success'>Conter</i>
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
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-counter" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     
    <div class="col-md-6">
        <h4>Add Counter Title</h4>
         <input type="text"  class="form-control" placeholder="Enter  title" name="title" id="title" required>
     </div>
       <div class="col-md-6">
        <h4>Add Counter Value(same as form data  value)</h4>
         <input type="text"  class="form-control" placeholder="Enter  value" name="value" id="value" required>
     </div>
    <div class="col-md-6">
        <h4>Add Counter Units</h4>
         <input type="text"  class="form-control" placeholder="Enter  units" name="units" id="units" required>
     </div>
     <div class="col-md-6">
        <h4>Add Counter Form Data(Must be same as counter value)</h4>
         <input type="text"  class="form-control" placeholder="Enter  data" name="data" id="data" required>
     </div>

   

        </div>  
         <button type="submit" style="margin:20px; " class="btn btn-danger">Submit</button></br>                      
         </form>
                        
                    

                </div>
            </section>
        </div>
        <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>


            </div>
             <img  class="img-fluid" src="<?php echo base_url('assets')?>/images/counter.png">
        </div>

    </div>

</div>

<!-- /.card-body -->