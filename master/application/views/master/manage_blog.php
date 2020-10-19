<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="box-content">
          <h1 style="text-align: center;color: #00B5FA">Welcome to Blog Section Dashboard</h1>
	<table style="margin-top: 40px;"class="table table-striped table-bordered bootstarp-datatale datatable">
		<thead>
			<tr>
				<th> Blog ID</th>
                 <th style="width:200px;">  DATE</th>
             
                 <th style="width:250px;"> Blog Title </th>
                 <th style="width:250px;"> Blog Details</th>
                 <th style="width:250px;"> Avatar</th>
                 <th style="width:250px;"> Posted by</th>
                 
                 <th style="">Action</th>
              

			</tr>
			<tbody>
				<?php 
				foreach($manage_all_blog as $v_blog){

				?>
                      <tr>
        <td class="center"><?php echo $v_blog->id ?></td>
        <td class="center"><?php echo $v_blog->date?></td>
 		<td class="center"><?php echo $v_blog->blog_title ?></td>
 		<td class="center"><?php echo $v_blog->blog_details ?></td>
 		<td class="center"><img src="<?php echo $v_blog->avatar?>"></td>
 		<td class="center"><?php echo $v_blog->posted_by ?></td>
 		
 		

 			<td>
<a class="btn btn-info" href="<?php echo base_url();?>edit-blog/<?php echo  $v_blog->id ?>">
				Edit
				<i class="halflings-icon white edit"></i>
</a>
<a class="btn btn-danger"href="" 
	id="sure">
	Delete
	<i class="halflings-icon white trash"></i>
</a>
<a class="btn btn-success"href="" 
	id="delete">
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



