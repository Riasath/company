
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#23272B; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Popup Icon</h3>
                    </div>
                     <div class="col-md-2">
            <a href="<?php echo base_url('Admin/popupicon') ?>">
              <button type='button' id="" class='btn bg-info'>Icon List</i>
              </button></a>
          </div>
                </div>

            </div>

            

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
             
        <form action="<?php echo base_url() ?>save-popupicon" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     
     <div class="col-md-6">
        <h4>Add social media icon (Maximum height 100px and width 100px)</h4>
         <input type="file" class="form-control" name="image" id="image" required>
     </div>
     <div class="col-md-6">
        <h4>Add social media link</h4>
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
          <img  class="img-fluid" src="<?php echo base_url('assets')?>/images/socialpopup.png">
          

          
        </div>

          
    </div>

</div>

<!-- /.card-body -->