<html>
<head>

<link rel='stylesheet' type='text/css' href="front-end/css/style.css">
<link rel="stylesheet" type="text/css" href="front-end/css/bootstrap.min.css">
</head>
<body>

  
<div class="container" style="width:600px;height:300px;text-align: :center;padding :20px;">

  <form action="<?php base_url();?>save-admin" method="post" enctype="multipart/form-data">

    <label for="adminname">Admin Name</label></br>
    <input type="text" id="adminname" required="" name="adminname"></br>

    <label for="adminpassword">Admin Password</label></br>
    <input type="text" id="adminpassword" required="" name="adminpassword"></br>
    <label for="adminimage">Upload Admin Image</label></br>
    <input type="file" id="adminimage" required="" name="adminimage"></br>

   
  

    <input type="submit" value="Submit"></br>

  </form>
</div>

</body>
</html>