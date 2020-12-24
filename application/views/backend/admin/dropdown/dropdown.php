
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Create Dropdown menu must be specify the mainmenu where the branch or sub menu located</h3>
					</div>

				</div>

			</div>

			<?= alert_check() ?>
				<a href="<?php echo base_url('Admin/add_dropdown') ?>">
				<button type='button' id="" style="margin:20px; "class='btn bg-info'>Create New Dropdown</i>
				</button></a>
	
		
								

           <?php
			if ($dropdownList) {
				$serial = 0;
				foreach ($dropdownList->result() as $list) {
					$serial++;


			?>
			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>

	 <form action="<?php echo base_url()?>update-dropdown" method="post" enctype="multipart/form-data">
			<div class="row">
					

				<div class="col-md-5">
					<h4>Dropdown Menu Item Name <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->m_item_name?>" name="m_item_name" id="m_item_name">
				</div>
				  <input type="hidden" value="<?php echo $list->m_item_id ?>"name="m_item_id" id="m_item_id" >
				  <div class="col-md-5">
			<h2><span class="text-danger">Must select MainMenu Name</span>  </h2>	  	
                     <select required class="form-control" name="m_id" id="m_id">
                     <option value="" disabled>Select a parent menu</option>
                     <?php foreach ($main_menu as $key => $value): ?>
                     <option value="<?=$value->m_id?>"><?=$value->m_name?></option>
                     <?php endforeach ?>
                     </select>
                 </div>
				<div class="col-md-5">
					<h4>Dropdown Menu Item URL <?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->m_item_url?>" name="m_item_url" id="m_item_url" required>
				</div>

				<div class="col-md-5">
					<h4>Dropdown Menu Item Description <?= $serial ?></h4>
					<input type="time" class="form-control" value="<?php echo $list->m_item_desc?>" name="m_item_desc" id="m_item_desc">
				</div>

				<div class="col-md-5">
					<h4>Dropdown Menu Item Created Time<?= $serial ?></h4>
					<input type="text" class="form-control" value="<?php echo $list->m_item_created_at?>" name="m_item_created_at" id="m_item_created_at">
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
