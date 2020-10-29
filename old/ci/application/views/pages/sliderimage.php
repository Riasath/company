<html>
<head>

<link rel='stylesheet' type='text/css' href="front-end/css/style.css">
<link rel="stylesheet" type="text/css" href="front-end/css/bootstrap.min.css">
</head>
<body>

  
<div class="container" style="width:600px;height:300px;text-align: :center;padding :20px;">

  <form action="<?php base_url();?>save-slider-image" method="post" enctype="multipart/form-data">

    <label for="slider_descriptions">Slider Image Description</label></br>
    <input type="text" id="slider_descriptions" required="" name="slider_descriptions"></br>

  
  
    <label for="slider_image">Upload Slider Image</label></br>
    <input type="file" id="slider_image" required="" name="slider_image"></br>

   
  

    <input type="submit" value="Submit"></br>

  </form>
</div>

</body>
</html>