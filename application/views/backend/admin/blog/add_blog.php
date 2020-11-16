<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>RTSOFTBD</title>




<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css')?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" media='all'>
</head>
<body>
  
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Add New Blog</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/blog') ?>">
                            <button type='button' id="" class='btn bg-success'>All Blog</i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
<div class="left" style="float:right;margin-right:460px;">
  <form action="<?php echo base_url()?>save-blog-list" method="post" enctype="multipart/form-data">
  <div class="container">
   



    <label for="date"><b>Blog Upload Time</b></label></br>
    <input type="date"  name="date" id="date" required></br>
    <label for="blog_title"><b>Blog Title</b></label></br>
    <input type="text"  name="blog_title" id="blog_title" required>
  </br>
  
    <label for="text-area"><b>Add Blog Details</b></label></br>
  <textarea style="background:#DDDDDD;" rows="4" cols="70"  name="blog_details" id="blog_details" ></textarea>
       </br> 
  </br>
   <label for="avatar"><b>Add Posted Avatar</b></label></br>
    <input type="file"  name="avatar" id="avatar" required>
  </br>
   <label for="posted_by"><b>Posted By</b></label></br>
    <input type="text"  name="posted_by" id="posted_by" required>
  </br>
    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</div>




</body>
</html>
</body>
</html>