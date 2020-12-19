<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Promo</h3>
                    </div>
                </div>
            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-promo" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     <div class="col-md-6">
        <h4>Upload Promo Image(Maximum 100px width,97px height )</h4>
         <input type="file"  class="form-control" name="image" id="image" required>
     </div>

     <div class="col-md-6">
        <h4>Add Promo Title</h4>
         <input type="text"  class="form-control" placeholder="Enter Promo title" name="title" id="title" required>
     </div>
       <div class="col-md-10">
        <h4>Add Promo Details</h4>
         <textarea  rows="4" style="background:;"cols="60" type="text" class="form-control"  name="details" placeholder="Enter Details" id="details" required></textarea>
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
             <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/promo.png">
        </div>

    </div>

</div>

<!-- /.card-body -->