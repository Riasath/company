
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">This section place in portfolio page project Demo Items section below the main menu</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_demo') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Item</i>
				</button></a>
	
		
								

           <?php
			if ($demoList) {
				$serial = 0;
				foreach ($demoList->result() as $list) {
					$serial++;


			?>

	 <form action="<?php echo base_url()?>update-demo" method="post" enctype="multipart/form-data">
			<div class="row">
					            
					<div class="col-md-5">
					<h4>Item Title <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-7">
	  <h4>Item Details <?= $serial ?></h4>
			<textarea style="background:#FFFFFF;" type="text" class="form-control" rows="4" cols="55"  name="details" id="details" value="" >
            <?php echo $list->details ?>
            </textarea>
		</div>
			
		<div class="col-md-6">
			<h4>Item Photo <?= $serial ?> </h4>
			 <img  style="height: 200px;width: 300px;"src="<?php echo base_url().$list->image?>">
			</div>
		<div class="col-md-6">
			<h4>Upload New Item Photo <?= $serial ?></h4>
				 <input type="file" name="image" class="form-control">
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
