<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138496;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Contact section place in main menu software development menu->our service page->after the tools box section</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($contactList) {
									
										foreach ($contactList->result() as $list) {
											
									?>
		 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
 <form action="<?php echo base_url()?>update-contact" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-5">
					<h4>Contact Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-7">
			<h4>Contact Details </h4>
			<textarea style="" rows="4" cols="55"  name="details" id="details" required >
		     <?php echo $list->details?>
	        </textarea>
	         </div>
			<div class="col-md-8">
			
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
                    <img  class="img-fluid" src="<?php echo base_url('assets')?>/images/tellus.png">		
		</div>

		</div>



		



<!-- /.card-body -->
