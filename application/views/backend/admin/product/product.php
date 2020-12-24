
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138496;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Our Product section place in main menu software development menu->our service page->after the feature item section</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($productList) {
									
										foreach ($productList->result() as $list) {
											


									?>
									 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
 <form action="<?php echo base_url()?>update-product" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>Product Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-10">
			<h4>Product Details(Max 250digit) </h4>
			<textarea style="" rows="5" cols="70"  name="details" id="details" required >
		     <?php echo $list->details?>
	        </textarea>
	         </div>
			<div class="col-md-10">
			<h4>Product Section1(Max 250digit)</h4>
			<textarea style="" rows="5" cols="70"  name="section1" id="section1" required >
		          <?php echo $list->section1?>
	         </textarea>
	         </div>
			<div class="col-md-10">
					<h4>Product Section2(Max 250digit)</h4>
			<textarea style="" rows="5" cols="70"  name="section2" id="section2" required >
				   <?php echo $list->section2?>
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
		<div class="card-header" style="background: #138496;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Easy Way To Understand</h3>
					</div>

					
				</div>
                   </div>
                    <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/product.png">		
		</div>

		</div>



		



<!-- /.card-body -->
