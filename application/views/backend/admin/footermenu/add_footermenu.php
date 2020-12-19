<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Footermenu</h3>
                    </div>
                     <div class="col-md-2">
            <a href="<?php echo base_url('Admin/footermenu') ?>">
              <button type='button' id="" class='btn bg-success'>Footermenu</i>
              </button></a>
          </div>
                </div>
            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-footermenu" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     
    <div class="col-md-6">
        <h4>Add Footermenu Title</h4>
         <input type="text"  class="form-control" placeholder="Enter  title" name="title" id="title" required>
     </div>
         <div class="col-md-6">
        <h4>Add Footermenu Link</h4>
         <input type="text"  class="form-control" placeholder="Enter  link" name="link" id="link" required>
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
             <img  class="img-fluid" src="<?php echo base_url('assets')?>/images/footermenu.png">
        </div>

    </div>

</div>

<!-- /.card-body -->