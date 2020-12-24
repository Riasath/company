<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#1D2124; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Partner image section place up of the email newsletter section in about page</h3>
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
	<a href="<?php echo base_url('Admin/add_partner_image') ?>">
	<button style="margin:20px; "type='button' id="" class='btn bg-dark'>Create New Partner Image</i>
	</button>
	</a>		
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th >Serial</th>
										<th >Partner Image</th>
										
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($partnerimageList) {
										$serial = 0;
										foreach ($partnerimageList->result() as $list) {
											$serial++;


									?>
											<tr>
												<td><?= $serial ?></td>
												
												<td>
                                                
                                                <img src="<?php echo base_url().$list->image?>" style="width:150px;height: 120px;">
                                                </td>


<td >
	<a href="<?php echo base_url()?>edit-partner-image/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>

<a href="<?php echo base_url()?>delete-partner-image/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button  style="margin:10px;"type='button'  onclick="return confirm('Are you sure you want to delete this item?');" class='btn bg-danger'>Delete<i class='fas fa-times'></i>
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
