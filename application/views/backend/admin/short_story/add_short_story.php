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




<link rel="stylesheet" href="<?php echo base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
  

<div class="content-wrapper">
  <div class="card-body">
    <div class="card card-primary">
      <div class="card-header">
        <div class="row">
          <div class="col-md-10">
            <h3 class="card-title">Short Story</h3>
          </div>

          <div class="col-md-2">
            <a href="<?php echo base_url('Admin/short_story') ?>">
              <button type='button' id="" class='btn bg-success'>All Story</i>
              </button></a>
          </div>
        </div>


      </div>

      <?= alert_check() ?>

<div class="left" >
  <form action="<?php echo base_url()?>save-short-story" method="post" enctype="multipart/form-data">
  <div class="container">
   



    <label for="short_story_heading"><b>Short Story Heading</b></label></br>
    <input type="text"  name="short_story_heading" id="short_story_heading" required>
  </br>
  <label for="short_story_title"><b>Short Story Title</b></label></br>
    <input type="text"  name="short_story_title" id="short_story_title" required>
  </br><label for="short_story_subtitle1"><b>Short Story SubTitle1</b></label></br>
    <input type="text"  name="short_story_subtitle1" id="short_story_subtitle1" required>
  </br><label for="short_story_subtitle2"><b>Short Story SubTitle2</b></label></br>
    <input type="text"  name="short_story_subtitle2" id="short_story_subtitle2" required>
  </br>
    
    



    <button type="submit" class="registerbtn">Submit</button></br>
   
  </div>
</form>
</div>
</body>
</html>