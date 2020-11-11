
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Feature</h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_feature

						') ?>">
							<button type='button' id="" class='btn bg-success'>Create New Feature</i>
							</button></a>
					</div>
				</div>


			</div>

			<?= alert_check() ?>
	
		<section class="content" style="margin-top:20px">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th >Serial</th>
										<th >Feature Image</th>
									
										<th >Feature Title</th>
										<th >Feature Details</th>
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($featureList) {
										$serial = 0;
										foreach ($featureList->result() as $list) {
											$serial++;


									?>
	


					<tr>
						<td><?= $serial ?></td>

		                   <td >
                            <img src="<?php echo base_url().$list->image?>"
                            style="height:100px;width:150px;" >
                            
                            </td>
						
					
                       
                        	<td><?= $list->title ?></td>
                       
                        	<td><?= $list->details ?></td>
                      <td >
<a href="<?php echo base_url()?>edit-feature/<?php echo $list->id?>" id="">
	<button type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-feature/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button type='button' class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-feature/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button type='button' class='btn bg-danger'>Delete<i class='fas fa-times'></i>
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
