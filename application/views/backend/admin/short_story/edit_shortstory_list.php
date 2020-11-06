<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD- Software and System Design</title>




<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
	
<div class="container-fluid">
<div class="left" style="float: left;">
	<form action="<?php echo base_url()?>update-shortstory-list" method="post" enctype="multipart/form-data">
  <div class="container">

  
     <label for="short_story_heading"><b>Edit Shortstory Heading</b></label></br>
    <input type="text"  name="short_story_heading" id="short_story_heading"
     value="<?php echo $all_shortstory_list_by_id->short_story_heading?>"></br>
             <label for="id"><b></b></label>
          <input type="hidden"  name="id" id="id" value="<?php echo $all_shortstory_list_by_id->id?>"></br>
          <label for="short_story_title"><b>Edit Shortstory Heading</b></label></br>
    <input type="text"  name="short_story_title" id="short_story_title"
     value="<?php echo $all_shortstory_list_by_id->short_story_title?>"></br>
             
             <label for="short_story_subtitle1"><b>Edit Shortstory Heading</b></label></br>
    <input type="text"  name="short_story_subtitle1" id="short_story_subtitle1"
     value="<?php echo $all_shortstory_list_by_id->short_story_subtitle1?>"></br>
             
             <label for="short_story_subtitle2"><b>Edit Shortstory Heading</b></label></br>
    <input type="text"  name="short_story_subtitle2" id="short_story_subtitle2"
     value="<?php echo $all_shortstory_list_by_id->short_story_subtitle2?>"></br>
             
        
     

    
 



  



    <button type="submit" class="registerbtn">Update</button></br>
   
  </div>
</form>



   



</div>

</div>
</body>
</html>
</body>
</html>