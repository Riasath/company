
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Our Accordon,this section show in main menu->digital marketing menu->our service page below the level box items section</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_accordon') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Accordon</i>
				</button></a>
	
		
								

           <?php
			if ($accordonList) {
				$serial = 0;
				foreach ($accordonList->result() as $list) {
					$serial++;


			?>
			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>

	 <form action="<?php echo base_url()?>update-accordon" method="post" enctype="multipart/form-data">
			<div class="row">
					            
					<div class="col-md-5">
					<h4>Accordon Title <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-7">
	  <h4>Accordon  Details <?= $serial ?></h4>
			<textarea style="background:#FFFFFF;" type="text" class="form-control" rows="4" cols="50"  name="details" id="details" value="" >
            <?php echo $list->details ?>
            </textarea>
		</div>

		<div class="col-md-6">
					<h4>Accordon IDname <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->idname?>" name="idname" id="idname">
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
