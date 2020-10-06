<!DOCTYPE html>
<html>
<head>
	<title>RTSOFTBD-Software and System Design</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
           <h2>View Page Of User Registration </h2>

           <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

           	<tr>
           		<td>
           			<a href="<?php echo base_url()?>manage-users"><button type="button" class="btn btn-info">See Users</button></a></br>
           		</td>
           		<td>
           			<a href="<?php echo base_url()?>add-admin"><button type="button" class="btn btn-success">Add New Admin</button></a></br>
	
           		</td>
           		<td>
           			<a href="<?php echo base_url()?>manage-admin"><button type="button" class="btn btn-info">Manage Admin</button></a></br>
           		</td>
           		<td>
           			<a href="<?php echo base_url()?>sliderpage"><button type="button" class="btn btn-light">Add Slider Image/button</a></br>
           		</td>
           		
               <td>
               	<a href="<?php echo base_url()?>manage-users-page"><button type="button" class="btn btn-success">See Users(pagination)</button></a></br>
               </td>



           		
           	</tr>
           

</table>

</body>
</html>