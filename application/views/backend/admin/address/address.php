
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Address section place in main menu->contact page->below the contact map</h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_address') ?>">
							<button type='button' id="" class='btn bg-success'>Create New Address</i>
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
										<th > Title</th>
										<th >House</th>
										<th >Cell Num</th>
										<th >Office Num</th>
										<th >Support Num</th>
										<th >Email</th>
										<th >Website</th>
									
									
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($addressList) {
										$serial = 0;
										foreach ($addressList->result() as $list) {
											$serial++;


									?>
											<tr>
								<td><?= $serial ?></td>
								<td ><?= $list->title ?>
									
								</td>
								<td><?= $list->house ?>
									
								</td>
								<td><?= $list->cellnum ?>
									
								</td>
								<td><?= $list->officenum ?>
									
								</td>

								<td><?= $list->supportnum ?>
									
								</td>

								<td><?= $list->gmail ?>
									
								</td>

								<td><?= $list->address ?>
									
								</td>

                                                


												<td >
<a href="<?php echo base_url()?>edit-address/<?php echo $list->id?>" id="">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-address/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button  style="margin:10px;"type='button' class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-address/<?php echo $list->id?>" id="<?= $list->id ?>">
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
