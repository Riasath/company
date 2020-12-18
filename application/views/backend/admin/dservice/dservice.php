
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">This section show in main menu->digital marketing menu->our service page below the menu section</h3>
					</div>

					
				</div>
                   </div>

			<?= alert_check() ?>

	
									<?php
									if ($dserviceList) {
									
										foreach ($dserviceList->result() as $list) {
											


									?>
 <form action="<?php echo base_url()?>update-dservice" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-7">
					<h4>Digital Service Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
			
				<div class="col-md-8">
						<h4>Digital Service Details</h4>

					<textarea style="background:#FFFFFF;"  type="text" class="form-control" rows="4" cols="60"  name="details" id="details" value="" >
                 <?php echo $list->details ?>
                </textarea>
				</div>
				
			<div class="col-md-10">
					<h4>Digital Service Image</h4>
					 <img  style="height:300px;width:700px;  "src="<?php echo base_url().$list->image?>">
				</div>
				<div class="col-md-6">
					<h4>Upload New Digital Service Image(maximum width 1171px and height 373px)</h4>
					 <input type="file" name="image" class="form-control">
				</div>
			</div>
					<button type="submit" style="margin-top:20px; " class="btn btn-info">Update</button>

			</form>
					
  					
						
									<?php
										}
									}
									?>
								
					
		</div>
		 <div class="card-header" style="background:#138294; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>
 
              </div>
           
 <img style="width:720px;" class="img-fluid" src="<?php echo base_url('assets')?>/images/dservice.png">
	</div>

</div>


  </div>


		



<!-- /.card-body -->
