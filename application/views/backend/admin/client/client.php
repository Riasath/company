
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Before Homepage Newsletter Section</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_client') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Client</i>
				</button></a>
	
		
								

           <?php
			if ($clientList) {
				$serial = 0;
				foreach ($clientList->result() as $list) {
					$serial++;


			?>

	 <form action="<?php echo base_url()?>update-client-list" method="post" enctype="multipart/form-data">
			<div class="row">
					            
		<div class="col-md-6">
			<h4>Client Photo <?= $serial ?> </h4>
			 <img  style="height: 200px;width: 300px;"src="<?php echo base_url().$list->client_image?>">
			</div>
		<div class="col-md-6">
			<h4>Upload New Client Photo <?= $serial ?></h4>
				 <input type="file" name="client_image" class="form-control">
			</div>
			  <input type="hidden" value="<?php echo $list->client_id ?>"name="client_id" id="client_id" ></br>
			 
			</div>




	   <button type="submit" style="margin:20px; " class="btn btn-info">Update</button>


				</form>
				                  <?php
										
									  }}
									?>

				       
		</div>
	</div>
</div>

<!-- /.card-body -->
