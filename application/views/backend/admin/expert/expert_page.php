<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Our Expert section include a title and a description for our main expert details section place is in about page below the our work slider section</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($expertList) {
									
										foreach ($expertList->result() as $list) {
											


									?>
 <form action="<?php echo base_url()?>update-expert" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-5">
					<h4>Expert Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-10">
			<h4>Expert Details</h4>
			    <textarea style="" rows="4" cols="60" class="form-control"  name="details" id="details" >
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
		<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Easy Way To Understand</h3>
					</div>

					
				</div>
                   </div>
                    <img class="img-fluid" src="<?php echo base_url('assets')?>/images/expert.png">		
		</div>

		</div>



		



<!-- /.card-body -->
