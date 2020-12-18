
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#218838; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Our Qualityitem section place in main menu software development menu->our service page->after the our quality skills title  section</h3>
					</div>

					<div class="col-md-2">
					
					</div>
				</div>


			</div>

			<?= alert_check() ?>
	
		<section class="content" style="margin-top:20px">
			<a href="<?php echo base_url('Admin/add_qualityitem') ?>">
			<button type='button' style="margin:20px;" id="" class='btn bg-success'>Create New Qualityitem</i>
			</button></a>	
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th >Serial</th>
										
										<th >Qualityitem Title</th>
										<th >Qualityitem value</th>
										
										
										
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($qualityitemList) {
										$serial = 0;
										foreach ($qualityitemList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						
						
                       
                        	<td><?= $list->title ?></td>
                       
                        	<td><?= $list->value ?></td>
                        	
                        	
                        	
                      <td >
<a href="<?php echo base_url()?>edit-qualityitem/<?php echo $list->id?>" id="">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-qualityitem/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button  style="margin:10px;"type='button' class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-qualityitem/<?php echo $list->id?>" id="<?= $list->id ?>">
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
