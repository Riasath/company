<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Vision</h3>
                    </div>
                </div>
            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-vision" method="post" enctype="multipart/form-data">
                               

   
 <div class="row">
     <div class="col-md-6">
        <h4>Add Vision Section Title</h4>
         <input type="text"  class="form-control" placeholder="Enter Vision title" name="title" id="title" required>
     </div>
       <div class="col-md-6">
        <h4>Add Vision Section Details</h4>
         <textarea  rows="3" style="background:;"cols="60" type="text" class="form-control"  name="details" placeholder="Enter Details" id="details" required></textarea>
     </div>

   
     <div class="col-md-6">
        <h4>Upload Vision Section Image(Maximum 370px width,249px height )</h4>
         <input type="file" name="image2" id="image2" required>
     </div>
     
    
     <div class="col-md-6">
        <h4>Upload Vision Section Background(Maximum 1170px width,292px height )</h4>
         <input type="file" name="image1" id="image1" required>
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
             <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/vision.png">
        </div>

    </div>

</div>

<!-- /.card-body -->