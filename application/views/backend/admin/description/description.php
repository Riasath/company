
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">This section show in main menu->digital marketing menu->our service page after the digital service section</h3>
					</div>

					
				</div>
                   </div>

			<?= alert_check() ?>

	
									<?php
									if ($descriptionList) {
									
										foreach ($descriptionList->result() as $list) {
											


									?>
 <form action="<?php echo base_url()?>update-description" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-7">
					<h4>Description Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
			
				<div class="col-md-8">
						<h4>Description Details1</h4>

					<textarea style="background:#FFFFFF;"  type="text" class="form-control" rows="4" cols="60"  name="details1" id="details1" value="" >
                 <?php echo $list->details1 ?>
                </textarea>
				</div>
				
				<div class="col-md-8">
						<h4>Description Details2</h4>

					<textarea style="background:#FFFFFF;"  type="text" class="form-control" rows="4" cols="60"  name="details2" id="details2" value="" >
                 <?php echo $list->details2 ?>
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
		 <div class="card-header" style="background:#138294; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>
 
              </div>
           
 <img  class="img-fluid" src="<?php echo base_url('assets')?>/images/description.png">
	</div>

</div>


  </div>


		



<!-- /.card-body -->
