
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138496;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Show this section in contact page before the contact map</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($contact_headList) {
									
										foreach ($contact_headList->result() as $list) {
											


									?>
 <form action="<?php echo base_url()?>update-contact-head" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-5">
					<h4>contact Heading Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-7">
			<h4>contact Heading Details </h4>
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
                    <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/contacthead.png">		
		</div>

		</div>



		



<!-- /.card-body -->
