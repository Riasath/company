
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Blog</h3>
                    </div>
                    <div class="col-md-2">
            <a href="<?php echo base_url('Admin/blog') ?>">
              <button type='button' id="" class='btn bg-info'>All Blog</i>
              </button></a>
          </div>
                </div>

            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
             
        <form action="<?php echo base_url() ?>save-blog-list" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     <div class="col-md-6">
        <h4>Add Upload Date</h4>
         <input type="date" class="form-control" name="date" id="date" required>
     </div> 


     <div class="col-md-6">
        <h4>Add Blog Title</h4>
         <input type="text" class="form-control"placeholder="Enter Title " name="blog_title" id="blog_title" required>
     </div> 
      <div class="col-md-6">
        <h4>Add Blog Details</h4>
        <textarea style="background:;" rows="4" cols="60" class="form-control" placeholder="Enter blog details" name="blog_details" id="blog_details" ></textarea>
     </div>
     <div class="col-md-6">
        <h4>Add Blog Avatar(Maximum height 64px and width 52px)</h4>
         <input type="file" class="form-control" name="avatar" id="avatar" required>
     </div>

      <div class="col-md-6">
        <h4>Add Posted Person Name</h4>
         <input type="text" class="form-control" name="posted_by" id="posted_by" required>
     </div>
       

   

        </div>  
         <button type="submit" style="margin:15px;" class="btn btn-danger">Submit</button></br>                      
         </form>
                        
                    

               
            </section>
       
        <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>


            </div>
          <img class="img-fluid" src="<?php echo base_url('assets')?>/images/blog.png">
          

          
        </div>

          
    </div>

</div>

<!-- /.card-body -->