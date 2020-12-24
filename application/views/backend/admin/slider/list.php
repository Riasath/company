
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-info">
			<div class="card-header" >
				<div class="row">
						<div class="col-md-10">
					<div class="card-title">
				
                   <h4>Homepage Slider After Menubar </h4>
						
					</div>
				</div>
				  
                   </div>


			</div>

			<?= alert_check() ?>
			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='' style='color:#E1711D;font-family:verdana;font-size:20px;'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>

			<section class="content" style="margin-top:20px">
				<a href="<?php echo base_url('Admin/add_slider') ?>">
				<button type="button" style="margin:20px; " 
				href="" class="btn btn-info">Create Slider</button>
				</a>
			
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th >Serial</th>
										<th >Title</th>
										<th >Short Description</th>
										<th >Image</th>
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($sliderList) {
										$serial = 0;
										foreach ($sliderList->result() as $list) {
											$serial++;


									?>
											<tr>
												<td><?= $serial ?></td>
												<td ><?= $list->slider_descriptions ?></td>
												<td><?= $list->slider_about ?></td>
                                                <td >
                                                <img src="<?php echo base_url().$list->slider_image?>"
                                                style="height:100px;width:150px;" >
                                                
                                                </td>


												<td >
<a href="<?php echo base_url()?>edit-slider-list/<?php echo $list->slider_id?>" id="">
	<button type='button'  style="margin:10px;"class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-slider-list/<?php echo $list->slider_id?>" id="<?= $list->slider_id ?>">
	<button type='button' style="margin:10px;"class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-slider-list/<?php echo $list->slider_id?>" id="<?= $list->slider_id ?>">
	<button  style="margin:10px;"type='button'  onclick="return confirm('Are you sure you want to delete this item?');"class='btn bg-danger' id="del">Delete<i class='fas fa-times'></i>
	</button>
</a>

												</td>
											</tr>
									<?php
										}
									}
									?>

								</tbody>
							</table>
						</div>
					</div>

				</div>
			</section>
		</div>
	</div>
</div>

<!-- /.card-body -->
