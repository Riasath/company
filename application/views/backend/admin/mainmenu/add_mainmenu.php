<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Mainmenu</h3>
                    </div>
                     <div class="col-md-2">
            <a href="<?php echo base_url('Admin/mainmenu') ?>">
              <button type='button' id="" class='btn bg-success'>Mainmenu</i>
              </button></a>
          </div>
                </div>
            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-mainmenu" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     
    <div class="col-md-6">
        <h4>Main Menu Name</h4>
         <input type="text"  class="form-control" placeholder="Enter  menu name" name="m_name" id="m_name" required>
     </div>
       <div class="col-md-6">
        <h4>Main Menu URL</h4>
         <input type="text"  class="form-control" placeholder="Enter URL" name="m_url" id="m_url" required>
     </div>
       <div class="col-md-6">
        <h4>Main Menu Description</h4>
         <input type="text"  class="form-control" placeholder="Enter  menu description" name="m_desc" id="m_desc" required>
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
             <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/mainmenu.png">
        </div>

    </div>

</div>

<!-- /.card-body -->