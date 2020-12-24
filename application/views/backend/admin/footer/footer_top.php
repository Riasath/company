<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Footertop section place in hompage footer area first part</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($footertopList) {
									
										foreach ($footertopList->result() as $list) {
											


									?>

									 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
 <form action="<?php echo base_url()?>update-footertop-list" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>Footer Area Heading</h4>
					<input type="text" class="form-control" value="<?php echo $list->footer_heading?>" name="footer_heading" id="footer_heading">
				</div>

    <input type="hidden" value="<?php echo $list->footer_id ?>"name="footer_id" id="footer_id" ></br>
  
    	<div class="col-md-10">
			<h4>Footer Area Details Content</h4>
			    <textarea style="background:;" rows="5" cols="60" class="form-control"  name="footer_details" id="footer_details" >
			    	<?php echo $list->footer_details?>
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
                    <img  class="img-fluid" src="<?php echo base_url('assets')?>/images/footertop.png">		
		</div>

		</div>



		



<!-- /.card-body -->
