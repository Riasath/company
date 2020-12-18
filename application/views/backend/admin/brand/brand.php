
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138496;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Our Brand,this section show in main menu->digital marketing menu->our service page below the accordon section</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($brandList) {
									
										foreach ($brandList->result() as $list) {
											


									?>
 <form action="<?php echo base_url()?>update-brand" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-5">
					<h4>Brand Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-7">
			<h4>Brand Details </h4>
			<textarea style="" rows="4" cols="50"  name="details" id="details" required >
		     <?php echo $list->details?>
	        </textarea>
	         </div>
			
            	</div>
				<button type="submit" style="margin:20px; " class="btn btn-info">Update</button>

				</form>
			
					<?php
										}
									}
									?>
		</div>	
		<div class="card-header" style="background: #138496;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Easy Way To Understand</h3>
					</div>

					
				</div>
                   </div>
                    <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/brand.png">		
		</div>

		</div>



		



<!-- /.card-body -->
