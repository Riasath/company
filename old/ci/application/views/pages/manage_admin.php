<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="front-end/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="box-content">

	<table class="table table-striped table-bordered bootstarp-datatale datatable">
		<thead>
			<tr>
				<th>Admin ID</th>
                 <th> Admin Name</th>
                 <th>Admin  Password </th>
                 <th>Admin Image</th>

			</tr>
			<tbody>
				<?php 
				foreach($all_admin_info as $v_admin){

				?>
                      <tr>
        <td class="center"><?php echo $v_admin->admin_id ?></td>
 		<td class="center"><?php echo $v_admin->adminname ?></td>
 		<td class="center"><?php echo $v_admin->adminpassword ?></td>
 		<td class="center"><img src="<?php echo $v_admin->adminimage ?>"></td>
 		



                 		</tr>
                 		 <?php } ?>


		</tbody>
		</thead>

	</table>

</div>
</body>
</html>



