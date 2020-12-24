
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#138496; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Vision section place after the promo box section in about page</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_vision') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Vision</i>
				</button></a>
	
		
								

           <?php
			if ($visionList) {
				$serial = 0;
				foreach ($visionList->result() as $list) {
					$serial++;


			?>
			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>

	 <form action="<?php echo base_url()?>update-vision" method="post" enctype="multipart/form-data">
			<div class="row">
					            
					<div class="col-md-5">
					<h4>Vision Section Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-7">
	  <h4>Vision Section Details</h4>
			<textarea style="background:#FFFFFF;" type="text" class="form-control" rows="4" cols="60"  name="details" id="details" value="" >
            <?php echo $list->details ?>
            </textarea>
		</div>
		<div class="col-md-6">
			<h4>Vision Background Photo </h4>
			 <img  style="height: 200px;width: 300px;"src="<?php echo base_url().$list->image1?>">
			</div>
		<div class="col-md-6">
			<h4>Upload New Vision Background Photo
            (Maximum 1170px width and 292px height)
			</h4>
				 <input type="file" name="image1" class="form-control">
			</div>
			
		<div class="col-md-6">
			<h4>Vision Section  Photo </h4>
			 <img  style="height: 200px;width: 300px;"src="<?php echo base_url().$list->image2?>">
			</div>
		<div class="col-md-6">
			<h4>Upload New Vision Section Photo(Maximum 370px width and 249px height)</h4>
				 <input type="file" name="image2" class="form-control">
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
