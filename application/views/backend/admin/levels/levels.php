
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Our Levels,
             this section show in main menu->digital marketing menu->our service page below the service tell us section</h3>
					</div>

					
				</div>
                   </div>

			<?= alert_check() ?>

	
									<?php
									if ($levelsList) {
									
										foreach ($levelsList->result() as $list) {
											


									?>
									 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
 <form action="<?php echo base_url()?>update-levels" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-7">
					<h4>Levels Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
			
				<div class="col-md-8">
						<h4>Levels Details</h4>

					<textarea style="background:#FFFFFF;"  type="text" class="form-control" rows="4" cols="60"  name="details" id="details" value="" >
                 <?php echo $list->details ?>
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
           
 <img  class="img-fluid" src="<?php echo base_url('assets')?>/images/levels.png">
	</div>

</div>


  </div>


		



<!-- /.card-body -->
