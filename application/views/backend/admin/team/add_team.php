<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Our Team</h3>
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
                    
                        
 <form action="<?php echo base_url() ?>save-team" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     

     <div class="col-md-6">
        <h4>Team Member Name</h4>
         <input type="text"  class="form-control" placeholder="Enter member name" name="name" id="name" required>
     </div>
     <div class="col-md-6">
        <h4>Team Member Designation</h4>
         <input type="text"  class="form-control" placeholder="Enter Work post" name="post" id="post" required>
     </div>
     <div class="col-md-6">
        <h4>Upload Team Member Image(Maximum 210px width,231px height )</h4>
         <input type="file"  name="image" id="image" required>
     </div>
     <div class="col-md-6">
        <h4>Upload Facebook Image(Maximum 200px width,140px height )</h4>
         <input type="file"  name="fbimage" id="fbimage" required>
     </div>
     <div class="col-md-6">
        <h4>Upload Youtube Image(Maximum 200px width,140px height )</h4>
         <input type="file"  name="yimage" id="yimage" required>
     </div>
     <div class="col-md-6">
        <h4>Upload Google Image(Maximum 200px width,140px height )</h4>
         <input type="file"  name="gimage" id="gimage" required>
     </div>
     <div class="col-md-6">
        <h4>Upload Twitter Image(Maximum 200px width,140px height )</h4>
         <input type="file"  name="timage" id="timage" required>
     </div>
      <div class="col-md-6">
        <h4>Team Member Facebook Link</h4>
         <input type="text"  class="form-control" placeholder="Enter link" name="fblink" id="fblink" required>
     </div>
      <div class="col-md-6">
        <h4>Team Member Youtube Link</h4>
         <input type="text"  class="form-control" placeholder="Enter link" name="ylink" id="ylink" required>
     </div>
      <div class="col-md-6">
        <h4>Team Member Google Link</h4>
         <input type="text"  class="form-control" placeholder="Enter link" name="glink" id="glink" required>
     </div>
      <div class="col-md-6">
        <h4>Team Member Twitter Link</h4>
         <input type="text"  class="form-control" placeholder="Enter link" name="tlink" id="tlink" required>
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
             <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/team.png">
        </div>

    </div>

</div>

<!-- /.card-body -->