
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>




<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">
	<form action="<?php echo base_url()?>update-blog-list" method="post" enctype="multipart/form-data">
  <div class="container">

    <label for="date"><b>Old Date</b></label></br>
    <input type="text"  name="date" id="date" value="<?php echo $all_blog_list_by_id->date?>"></br>
     <label for="date"><b>Enter New Date</b></label></br>
    <input type="date"  name="date" id="date" >
    
      <label for="id"><b></b></label>
          <input type="hidden"  name="id" id="id" value="<?php echo $all_blog_list_by_id->id?>"></br>

    <label for="blog_title"><b>Edit Blog Title</b></label></br>
    <input type="text"  name="blog_title" id="blog_title"
     value="<?php echo $all_blog_list_by_id->blog_title?>"></br>

    <label for="blog_details"><b>Edit Blog Details</b></label></br>
   
    <textarea style="background:#F1F1F1;" rows="4" cols="70"  name="blog_details" id="blog_details"  value=""><?php echo $all_blog_list_by_id->blog_details?></textarea>
     </br>
      </br>
     <label for="avatar"><b>recent  Blog Avatar</b></label></br>
    <img src="<?php echo base_url().$all_blog_list_by_id->avatar ?>"></br>
  </br>

     <label for="avatar"><b>Edit Avatar</b></label></br>
    <input type="file" name="avatar" id="avatar" 
     ></br>

     <label for="posted_by"><b>Edit Posted By</b></label></br>
    <input type="text" name="posted_by" id="posted_by" 
     value="<?php echo $all_blog_list_by_id->posted_by?>"></br>
 



  



    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
