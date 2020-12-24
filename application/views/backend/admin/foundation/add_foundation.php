
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#218637; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Foundation Timeline</h3>
                    </div>
                </div>
            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
  <form action="<?php echo base_url() ?>save-foundation" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     <div class="col-md-6">
        <h4>Upload Foundation Image(Maximum 270px width,282px height )</h4>
         <input type="file"  name="foundation_image" id="foundation_image" required>
     </div>
      <div class="col-md-6">
        <h4>Add Foundation Date</h4>
         <input type="date"  class="form-control" name="date" id="date" required>
     </div>


     <div class="col-md-6">
        <h4>Add Foundation Title</h4>
         <input type="text"  class="form-control" placeholder="Enter title" name="foundation_title" id="foundation_title" required>
     </div>
       <div class="col-md-6">
        <h4>Add Foundation Details</h4>
         <textarea  rows="3" style="background:;"cols="60" type="text" class="form-control"  name="foundation_details" placeholder="Enter Details" id="foundation_details" required></textarea>
     </div>

   

        </div>  
         <button type="submit" style="margin:20px; " class="btn btn-success">Submit</button></br>                      
         </form>
                        
                    

                </div>
            </section>
        </div>
        <div class="card-header" style="background:#218637; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>


            </div>
             <img  class="img-fluid"src="<?php echo base_url('assets')?>/images/foundation.png">
        </div>

    </div>

</div>

<!-- /.card-body -->