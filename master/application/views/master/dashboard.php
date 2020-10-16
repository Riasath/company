<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboardstyle.css');?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Dashboard</title>
</head>
<body>

	
		<h1  class="text-center">Welcome to Dashboard</h1>
		
	      <hr>
	      <div id="left-side" style="float: left;">
	    <p style="margin-top:100px;margin-left:30px;">
	   	<a  href="<?= base_url();?>add-slider"><button type="button"class="btn btn-info">Add New Slider Item</button></a>
	  

	    </p>
	     <p style="margin-top:60px;margin-left:30px;">
	   	<a  href="<?= base_url();?>add-slides-item"><button type="button"class="btn btn-success">Add New Slides Item</button></a>
	  

	    </p>
	      <p style="margin-top:60px;margin-left:30px;">
	   	<a  href="<?= base_url();?>manage-slider"><button type="button"class="btn btn-danger">Manage Slider</button></a>
	  

	    </p>
	    </p>
	      <p style="margin-top:60px;margin-left:30px;">
	   	<a  href="<?= base_url();?>add-testimonials"><button type="button"class="btn btn-warning">ADD Testimonials</button></a>
	  

	    </p>
	</div>	    
    <div id="right_side" style="float: right;">
	<p style="margin-top:98px;margin-right: 500px;">
	   	<a  href="<?= base_url();?>add-client"><button type="button"class="btn btn-dark">ADD Client image</button></a>
	   </p>
	   <p style="margin-top:40px;margin-right: 500px;">
	   	<a  href="<?= base_url();?>add-footer"><button type="button"class="btn btn-primary">Add Footer Section</button></a>
	   </p>

	    </div>



</body>
</html>