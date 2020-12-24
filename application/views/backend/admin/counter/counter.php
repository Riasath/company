
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Counter,this section show in homepage ->before the testimonial section</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_counter') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Conter Items</i>
				</button></a>
				 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
	
		
								

           <?php
			if ($counterList) {
				$serial = 0;
				foreach ($counterList->result() as $list) {
					$serial++;


			?>

	 <form action="<?php echo base_url()?>update-counter" method="post" enctype="multipart/form-data">
			<div class="row">
					            
					<div class="col-md-6">
					<h4>Conter  Title <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
		           </div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	          <div class="col-md-6">
					<h4>Conter  Value <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->value?>" name="value" id="value">
		           </div>

		           <div class="col-md-6">
					<h4>Conter  Units <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->units?>" name="units" id="units">
		           </div>
		           <div class="col-md-6">
					<h4>Conter  Form Data <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->data?>" name="data" id="data">
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
