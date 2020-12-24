
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Logo section show every pages header part->left side of main menu</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_logo') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Logo</i>
				</button></a>
	
		
								

           <?php
			if ($logoList) {
				$serial = 0;
				foreach ($logoList->result() as $list) {
					$serial++;


			?>
			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>

	 <form action="<?php echo base_url()?>update-logo" method="post" enctype="multipart/form-data">
			<div class="row">
					            
		<div class="col-md-6">
			<h4>Old Logo  <?= $serial ?> </h4>
			 <img  style="height: 80px;width: 150px;"src="<?php echo base_url().$list->image?>">
			</div>
		<div class="col-md-6">
			<h4>Upload New Logo  <?= $serial ?></h4>
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
