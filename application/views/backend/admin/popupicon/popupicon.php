
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Popup socail media icon section place every pages in the top of Header</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_popupicon') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Social Icon</i>
				</button></a>
	
		
								

           <?php
			if ($popupList) {
				$serial = 0;
				foreach ($popupList->result() as $list) {
					$serial++;


			?>

	 <form action="<?php echo base_url()?>update-popoupicon" method="post" enctype="multipart/form-data">
			<div class="row">
					            
		<div class="col-md-6">
			<h4>Social media icon <?= $serial ?> </h4>
			 <img  style="height: 200px;width: 300px;"src="<?php echo base_url().$list->image?>">
			</div>
		<div class="col-md-6">
			<h4>Upload New Social media icon <?= $serial ?></h4>
				 <input type="file" name="image" class="form-control">
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
