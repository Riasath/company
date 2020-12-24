
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">This section place in every pages footer Section before Copyright Area</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($footerbottomList) {
									
										foreach ($footerbottomList->result() as $list) {
											


									?>
									 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
 <form action="<?php echo base_url()?>update-footerbottom" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>Footer Area Mobile</h4>
					<input type="text" class="form-control" value="<?php echo $list->mobile?>" name="mobile" id="mobile">
				</div>

				<div class="col-md-6">
					<h4>Footer Area Gmail</h4>
					<input type="text" class="form-control" value="<?php echo $list->gmail?>" name="gmail" id="gmail">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-6">
			<h4>Footer Area Address</h4>
			    <textarea style="text-align:left; " rows="2" cols="50" class="form-control"  name="address" id="address" >
			    	<?php echo $list->address?>
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
                    <img class="img-fluid" src="<?php echo base_url('assets')?>/images/footerbottom.png">		
		</div>

		</div>



		



<!-- /.card-body -->
