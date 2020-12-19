
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#23272B; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Media Icon</h3>
                    </div>
                     <div class="col-md-2">
            <a href="<?php echo base_url('Admin/footer_icon') ?>">
              <button type='button' id="" class='btn bg-info'>Icon List</i>
              </button></a>
          </div>
                </div>

            </div>

            

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
             
        <form action="<?php echo base_url() ?>save-footericon" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     
     <div class="col-md-8">
        <h4>Add Social Media Icon(Maximum height 100px and width 100px)</h4>
         <input type="file" class="form-control" name="footer_images" id="footer_images" required>
     </div>
  
  <div class="col-md-6">
        <h4>Add Social Media Link</h4>
         <input type="text" class="form-control" name="link" id="link" required>
     </div>
     

   

        </div>  
         <button type="submit" style="margin:15px;" class="btn btn-dark">Submit</button></br>                      
         </form>
                        
                    

               
            </section>
       
        <div class="card-header" style="background:#23272B; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>


            </div>
          <img class="img-fluid" src="<?php echo base_url('assets')?>/images/socialicon.png">
          

          
        </div>

          
    </div>

</div>

<!-- /.card-body -->