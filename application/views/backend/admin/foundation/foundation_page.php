
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#138496; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Foundation location In about page below the short story section</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_foundation') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Foundation</i>
				</button></a>
	
		
								

           <?php
			if ($foundationList) {
				$serial = 0;
				foreach ($foundationList->result() as $list) {
					$serial++;


			?>

	 <form action="<?php echo base_url()?>update-foundation-list" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
	           <h4>Old Date</h4> 
        <input class="form-control"type="text" value="<?php echo $list->date ?>"name="date" id="date" >
				</div>
					            
			<div class="col-md-6">
	           <h4>Add Date</h4> 
        <input class="form-control"type="date" name="date" id="date" >
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
		<div class="col-md-6">
			<h4>Foundation Title</h4>
			 <input class="form-control"type="text" value="<?php echo $list->foundation_title ?>"name="foundation_title" id="foundation_title" >
		</div>
		<div class="col-md-10">
			<h4>Foundation Details</h4>
			 <textarea class="form-control"style="background:#F1F1F1;" type="text" rows="4" cols="70"  name="foundation_details" id="foundation_details" value="" >
         <?php echo $list->foundation_details ?>
       </textarea>
		</div>

    	<div class="col-md-6">
	  <h4>Recent foundation Image</h4>
    <img src="<?php echo base_url().$list->foundation_image?>"class="img-fluid"style="height:180px;width:200px;border:1px solid #000000;">
     </br>
		</div>
		
		<div class="col-md-6">
			<h4>Upload New  Foundation Photo
            ((Maximum 270px width,282px height ))
			</h4>
				 <input type="file" name="foundation_image" class="form-control">
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
