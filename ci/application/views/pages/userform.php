<html>
<head>

<link rel='stylesheet' type='text/css' href="front-end/css/style2.css">
<link rel="stylesheet" type="text/css" href="front-end/css/bootstrap.min.css">
</head>
<body>

  
<div class="container">

  <form action="<?php base_url();?>save-users" method="post">

    <label for="fname">First_Name</label>
    <input type="text" id="fname" required="" name="first_name">

    <label for="lname">Last_Name</label>
    <input type="text" id="lname" required="" name="last_name">  


      <label for="image">Image</label>
    <input type="file" id="image" required="" name="image"> </br>


      <label for="username">UserName</label>
    <input type="text" id="lname" required="" name="username">  


     <label for="password">Password</label>
    <input type="text" id="password" required="" name="password">
  

    <input type="submit" value="Submit">

  </form>
</div>

</body>
</html>





