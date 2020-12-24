
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Create Menu section show main menu item like home,contact,about etc</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_mainmenu') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Mainmenu</i>
				</button></a>
	
		
								

           <?php
			if ($mainmenuList) {
				$serial = 0;
				foreach ($mainmenuList->result() as $list) {
					$serial++;


			?>
			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>

	 <form action="<?php echo base_url()?>update-mainmenu" method="post" enctype="multipart/form-data">
			<div class="row">
					

				<div class="col-md-5">
					<h4>Menu Name <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->m_name?>" name="m_name" id="m_name">
				</div>
				  <input type="hidden" value="<?php echo $list->m_id ?>"name="m_id" id="m_id" >

				<div class="col-md-5">
					<h4>Menu URL <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->m_url?>" name="m_url" id="m_url" required>
				</div>

				<div class="col-md-5">
					<h4>Menu Created Time <?= $serial ?></h4>
					<input type="time" class="form-control" value="<?php echo $list->m_created_at?>" name="m_created_at" id="m_created_at">
				</div>

				<div class="col-md-5">
					<h4>Menu Description <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->m_desc?>" name="m_desc" id="m_desc">
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
