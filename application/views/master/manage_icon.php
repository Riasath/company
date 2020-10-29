<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="box-content">
          <h1 style="text-align: center;color: #00B5FA">Welcome to AVATAR Dashboard</h1>
	<table style="margin-top: 40px;"class="table table-striped table-bordered bootstarp-datatale datatable">
		<thead>
			<tr>
				<th> AVATAR ID</th>
                 
                 <th style="">Avatar </th>
                 <th style="">Action</th>
              

			</tr>
			<tbody>
				<?php 
				foreach($all_saved_icon as $v_image){

				?>
                      <tr>
        <td class="center"><?php echo $v_image->id ?></td>
 		
 		<td class="center">
 			<img src="<?php echo $v_image->footer_images?>" 
 			style="height:60px;width:90px;">
 		</td>


 			<td>
<a class="btn btn-info" href="<?php echo base_url()?>edit-avatar/<?php echo $v_image->id?>">
				Edit
				<i class="halflings-icon white edit"></i>
</a>
<a class="btn btn-danger"href="<?php echo base_url()?>delete-avatar/<?php echo $v_image->id?>" 
	id="delete">
	Delete
	<i class="halflings-icon white trash"></i>
</a>
<a class="btn btn-success"
href="<?php echo base_url()?>view-avatar/<?php echo $v_image->id?>" 
	>
	View
	<i class="halflings-icon white trash"></i>
</a>
</td>
 	


	
                 		</tr>
                 		 <?php } ?>


		</tbody>
		</thead>

	</table>

</div>
</body>
</html>



