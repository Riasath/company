<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Levelsbox</h3>
                    </div>
                     <div class="col-md-2">
            <a href="<?php echo base_url('Admin/levelsbox') ?>">
              <button type='button' id="" class='btn bg-success'>Levelsbox</i>
              </button></a>
          </div>
                </div>
            </div>

            <?= alert_check() ?>
                     <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-levelsbox" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     <div class="col-md-6">
        <h4>Upload Levelsbox Image(Maximum 70px width,70px height )</h4>
         <input type="file"  class="form-control" name="image" id="image" required>
     </div>

     <div class="col-md-6">
        <h4>Levelsbox Title</h4>
         <input type="text"  class="form-control" placeholder="Enter title" name="title" id="title" required>
     </div>
       <div class="col-md-9">
        <h4>Levelsbox Details</h4>
         <textarea  rows="3" style="background:;"cols="60" type="text" class="form-control"  name="details" placeholder="Enter Details" id="details" required></textarea>
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
             <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/levelsbox.png">
        </div>

    </div>

</div>

<!-- /.card-body -->