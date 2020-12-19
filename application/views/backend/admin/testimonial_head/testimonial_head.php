
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138496;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Show this section in homepage testimonial section</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($testimonial_headList) {
									
										foreach ($testimonial_headList->result() as $list) {
											


									?>
 <form action="<?php echo base_url()?>update-testimonial-head" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>Testimonial Heading Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-8">
			<h4>Testimonial Heading Details </h4>
			<textarea style="" class="form-control" rows="4" cols="60"  name="details" id="details" required >
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
                    <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/testimonialhead.png">		
		</div>

		</div>



		



<!-- /.card-body -->
