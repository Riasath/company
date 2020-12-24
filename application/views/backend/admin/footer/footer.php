
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #218637;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">In everypage footer  Copyright Section place bottom of the footer section</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($footerList) {
									
										foreach ($footerList->result() as $list) {
											


									?>
									 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
 <form action="<?php echo base_url()?>update-footer-copyright" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>Year</h4>
					<input type="text" class="form-control" value="<?php echo $list->year?>" name="year" id="year">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-6">
						<h4>Company Name</h4>
					<input type="text" class="form-control" value="<?php echo $list->company_name?>" name="company_name" id="company_name">
				</div>
			<div class="col-md-6">
						<h4>Design By Name</h4>
					<input type="text" class="form-control" value="<?php echo $list->design?>" name="design" id="design">
				</div>
				<div class="col-md-6">
						<h4>Developed By Name</h4>
					<input type="text" class="form-control" value="<?php echo $list->developed?>" name="developed" id="developed">
				</div>
				<div class="col-md-6">
						<h4>Only On</h4>
					<input type="text" class="form-control" value="<?php echo $list->only_on?>" name="only_on" id="only_on">
				</div>
            	</div>
				
		
				
				
				
				<button type="submit" style="margin:20px; " class="btn btn-success">Update</button>

				</form>
			
					
  					
						
									<?php
										}
									}
									?>
		</div>	
		<div class="card-header" style="background: #218637;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Easy Way To Understand</h3>
					</div>

					
				</div>
                   </div>
                    <img  class="img-fluid" src="<?php echo base_url('assets')?>/images/copyright.png">		
		</div>

		</div>



		



<!-- /.card-body -->
