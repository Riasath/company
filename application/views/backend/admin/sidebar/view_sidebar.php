<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<link rel="stylesheet" href="<?= base_url('assets/css/stylelogin1.css');?>" media='all'>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" media='all'>
</head>
<body>
<div class="content-wrapper">

  <div class="container">

      <h1><?php echo $all_sidebar_view_by_id->title ?></h1>
       </br>
      
        <h4>
          <?php echo $all_sidebar_view_by_id->details ?>
        </h4>
        
         </br>
        
    
         <label for="slider_image"><b></b></label></br>
    <img src="<?php echo base_url().$all_sidebar_view_by_id->image?>" style="height:300px;width:300px;border:1px solid #FC4136;">
            </br>
      <h4>
          <?php echo $all_sidebar_view_by_id->mobile ?>
        </h4>
               </br>
         <h4>
          <?php echo $all_sidebar_view_by_id->gmail ?>
        </h4>
               </br>
         <h4>
          <?php echo $all_sidebar_view_by_id->address ?>
        </h4>
  
  </div>
</form>
</div>
</div>

</div>
</body>
</html>
