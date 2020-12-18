<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">
                            Create Feedback  
                            </h3>                
                        </div>
                </div>
            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-feedback" method="post" enctype="multipart/form-data">
                               

   
 <div class="row">
     <div class="col-md-6">
        <h4>Add Feedback  Description</h4>
         <input type="text"  class="form-control" placeholder="Enter feedback description" name="description" id="description" required>
     </div>
       <div class="col-md-6">
        <h4>Add Feedback  Author Name </h4>
         <textarea  rows="3" style="background:;"cols="60" type="text" class="form-control"  name="author" placeholder="Enter author" id="author" required></textarea>
     </div>

      <div class="col-md-6">
        <h4>Add Feedback  Author Market </h4>
         <textarea  rows="3" style="background:;"cols="60" type="text" class="form-control"  name="market" placeholder="Enter market" id="market" required></textarea>
     </div>

   
     <div class="col-md-6">
        <h4>Upload Feedback Author Photo(Maximum 52px width,64px height )</h4>
         <input type="file" name="image" id="image" required>
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
             <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/feedback.png">
        </div>

    </div>

</div>

<!-- /.card-body -->