
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Slider</h3>
                    </div>
                     <div class="col-md-2">
            <a href="<?php echo base_url('Admin/list_slider') ?>">
              <button type='button' id="" class='btn bg-success'>Slider List</i>
              </button></a>
          </div>
            </div>
                </div>
               

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
                            <form action="<?php echo base_url() ?>Admin/save_slider" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     <div class="col-md-6">
        <h4>Upload Slider Image(Maximum 1000px width,350px height )</h4>
         <input type="file" placeholder="Enter First Name" name="slider_image" id="slider_image" required>
     </div>

     <div class="col-md-6">
        <h4>Add Slider Title</h4>
         <input type="text"  class="form-control" placeholder="Enter slider title" name="slider_descriptions" id="slider_descriptions" required>
     </div>
       <div class="col-md-6">
        <h4>Add Slider Short Description</h4>
         <textarea  rows="3" style="background:;"cols="60" type="text" class="form-control"  name="slider_about" placeholder="Enter Short Description" id="slider_about" required></textarea>
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
             <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/slider.png">
        </div>

    </div>

</div>

<!-- /.card-body -->