
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Levelsbox,
              this section show in main menu->digital marketing menu->our service page below the Level title section section</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_levelsbox') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Levelsbox</i>
				</button></a>
	
		
								

           <?php
			if ($levelsboxList) {
				$serial = 0;
				foreach ($levelsboxList->result() as $list) {
					$serial++;


			?>
			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>

	 <form action="<?php echo base_url()?>update-levelsbox" method="post" enctype="multipart/form-data">
			<div class="row">
					            
					<div class="col-md-5">
					<h4>Levelsbox Title <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-7">
	  <h4>Levelsbox Details <?= $serial ?></h4>
			<textarea style="background:#FFFFFF;" type="text" class="form-control" rows="4" cols="55"  name="details" id="details" value="" >
            <?php echo $list->details ?></textarea>
            
		</div>
			
		<div class="col-md-6">
			<h4>Levelsbox Image <?= $serial ?> </h4>
			 <img  style="height: 200px;width: 300px;"src="<?php echo base_url().$list->image?>">
			</div>
		<div class="col-md-6">
			<h4>Upload New Levelsbox Image <?= $serial ?></h4>
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
