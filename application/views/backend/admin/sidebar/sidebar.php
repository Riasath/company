
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Sidebar button place every pages in the bottom of main menu right position</h3>
					</div>

					
				</div>
                   </div>

			<?= alert_check() ?>

	
									<?php
									if ($sidebarList) {
									
										foreach ($sidebarList->result() as $list) {
											


									?>
									 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
 <form action="<?php echo base_url()?>update-sidebar" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>Sidebar Title</h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-6">
						<h4>Sidebar Mobile</h4>
					<input type="text"  class="form-control"value="<?php echo $list->mobile?>" name="mobile" id="mobile">
				</div>
			<div class="col-md-5">
						<h4>Sidebar gmail</h4>
					<input type="text" class="form-control" value="<?php echo $list->gmail?>" name="gmail" id="gmail">
				</div>
				<div class="col-md-7">
						<h4>Sidebar Address</h4>
					<textarea style="background:#FFFFFF;" type="text" class="form-control" rows="4" cols="60"  name="address" id="address" value="" >
                 <?php echo $list->address ?>
                </textarea>
				</div>
   
				<div class="col-md-8">
					<h4>Sidebar Details</h4>
					<textarea style="background:#FFFFFF;" type="text" class="form-control" rows="4" cols="60"  name="details" id="details" value="" >
                 <?php echo $list->details ?>
               </textarea>
				</div>
				<div class="col-md-4">
					<h4>Sidebar Logo</h4>
					 <img src="<?php echo base_url().$list->image?>">
				</div>
				<div class="col-md-6">
					<h4>Upload New Logo</h4>
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
           
 <img class="img-fluid" src="<?php echo base_url('assets')?>/images/sidebar.png">
	</div>




  </div>


		



<!-- /.card-body -->
