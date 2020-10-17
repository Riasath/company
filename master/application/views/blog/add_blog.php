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




<link rel="stylesheet" href="assets/css/stylelogin1.css" media='all'>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" media='all'>
</head>
<body>
  

<div class="left">
  <form action="<?php echo base_url()?>save-blog" method="post" enctype="multipart/form-data">
  <div class="container">
   



    <label for="date"><b>Blog Upload Time</b></label></br>
    <input type="date"  name="date" id="date" required></br>
    <label for="blog_title"><b>Blog Title</b></label></br>
    <input type="text"  name="blog_title" id="blog_title" required>
  </br>
  
    <label for="text-area"><b>Add Blog Details</b></label></br>
    <textarea class="form-control rounded-0"  name="blog_details" id="exampleFormControlTextarea2" rows="3"></textarea>
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





</div>
</body>
</html>
</body>
</html>