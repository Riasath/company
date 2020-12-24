
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #218637;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Address section place in main menu->contact page->below the contact map</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($addressList) {
									
										foreach ($addressList->result() as $list) {
											


									?>
		 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
 <form action="<?php echo base_url()?>update-address" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

				<div class="col-md-6">
                <h4>House</h4>
                <textarea  rows="3" style="background:;"cols="60" type="text" class="form-control"  name="house" placeholder="Enter house" id="house" required>
                	<?php echo $list->house?>
                </textarea>
                </div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-6">
						<h4>Cell Number</h4>
					<input type="text" class="form-control" value="<?php echo $list->cellnum?>" name="cellnum" id="cellnum">
				</div>
			<div class="col-md-6">
						<h4>Office Number</h4>
					<input type="text" class="form-control" value="<?php echo $list->officenum?>" name="officenum" id="officenum">
				</div>
				<div class="col-md-6">
						<h4>Support Number</h4>
					<input type="text" class="form-control" value="<?php echo $list->supportnum?>" name="supportnum" id="supportnum">
				</div>

				<div class="col-md-6">
						<h4>Email</h4>
					<input type="text" class="form-control" value="<?php echo $list->gmail?>" name="gmail" id="gmail">
				</div>
				<div class="col-md-6">
						<h4>Website</h4>
					<input type="text" class="form-control" value="<?php echo $list->address?>" name="address" id="address">
				</div>
            	</div>
				
		
				
				
				
				<button type="submit" style="margin-top:20px; " class="btn btn-success">Update</button>

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
                    <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/popup.png">		
		</div>

		</div>



		



<!-- /.card-body -->
