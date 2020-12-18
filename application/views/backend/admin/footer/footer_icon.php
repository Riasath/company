
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Footer Section Social Media Icon</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_footer_icon') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Icon</i>
				</button></a>
	
		
								

           <?php
			if ($footericonList) {
				$serial = 0;
				foreach ($footericonList->result() as $list) {
					$serial++;


			?>

	 <form action="<?php echo base_url()?>update-footericon" method="post" enctype="multipart/form-data">
			<div class="row">
					            
		<div class="col-md-6">
			<h4>Recent Social Media Icon <?= $serial ?> </h4>
			 <img  style="height:70px;width:70px;border-radius:4px; "src="<?php echo base_url().$list->footer_images?>">
			</div>
		<div class="col-md-6">
			<h4>Upload New Social Media Icon <?= $serial ?></h4>
				 <input type="file" name="footer_images" class="form-control">
			</div>
			  <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
			 
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
