
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Footermenu,this section show in every pages footer section right part</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_footermenu') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New footermenu</i>
				</button></a>
	
		
								

           <?php
			if ($footermenuList) {
				$serial = 0;
				foreach ($footermenuList->result() as $list) {
					$serial++;


			?>

			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>

	 <form action="<?php echo base_url()?>update-footermenu" method="post" enctype="multipart/form-data">
			<div class="row">
					            
					<div class="col-md-5">
					<h4>Footermenu Title <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->title?>" name="title" id="title">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-5">
					<h4>Footermenu Link <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->link?>" name="link" id="link">
				</div>
			
	
			</div>



	   <button type="submit" style="margin:20px; " class="btn btn-info">Update</button>

				</form>
				                  <?php
										
									  }}
									?>

				       
		</div>
	</div>
</div>

<!-- /.card-body -->
