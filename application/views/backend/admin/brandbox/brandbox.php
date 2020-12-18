
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Our Brandbox,this section show in main menu->digital marketing menu->our service page before the email newsletter section</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_brandbox') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Brandbox</i>
				</button></a>
	
		
								

           <?php
			if ($brandboxList) {
				$serial = 0;
				foreach ($brandboxList->result() as $list) {
					$serial++;


			?>

	 <form action="<?php echo base_url()?>update-brandbox" method="post" enctype="multipart/form-data">
			<div class="row">
					            
					<div class="col-md-5">
					<h4>Brandbox Title <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-7">
	  <h4>Brandbox  Details <?= $serial ?></h4>
			<textarea style="background:#FFFFFF;" type="text" class="form-control" rows="4" cols="50"  name="details" id="details" value="" >
            <?php echo $list->details ?>
            </textarea>
		</div>

		<div class="col-md-6">
					<h4>Brandbox Value <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->value?>" name="value" id="value">
				</div>
			
	
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
