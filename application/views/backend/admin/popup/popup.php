
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-info">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Popup Section place every pages in the top of Header</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($popupList) {
									
										foreach ($popupList->result() as $list) {
											


									?>
 <form action="<?php echo base_url()?>update-sidebar" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>Popup Mobile</h4>
					<input type="text" class="form-control" value="<?php echo $list->mobile?>" name="mobile" id="mobile">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-6">
						<h4>Popup Gmail</h4>
					<input type="text" class="form-control" value="<?php echo $list->gmail?>" name="gmail" id="gmail">
				</div>
			<div class="col-md-6">
						<h4>Popup Day</h4>
					<input type="text" class="form-control" value="<?php echo $list->day?>" name="day" id="day">
				</div>
				<div class="col-md-6">
						<h4>Popup Time</h4>
					<input type="text" class="form-control" value="<?php echo $list->time?>" name="time" id="time">
				</div>
            	</div>
				
		
				
				
				
				<button type="submit" style="margin-top:20px; " class="btn btn-info">Update</button>

				</form>
			
					
  					
						
									<?php
										}
									}
									?>
		</div>	
		<div class="card-header" style="background: #17A2B8;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Easy Way To Understand</h3>
					</div>

					
				</div>
                   </div>
                    <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/popup.png">		
		</div>

		</div>



		



<!-- /.card-body -->
