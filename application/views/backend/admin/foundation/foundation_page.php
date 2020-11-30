
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Foundation location In about page below the short story section</h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_foundation') ?>">
							<button type='button' id="" class='btn bg-success'>Create New Foundation</i>
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
										<th >Fondation Image</th>
										<th >Fondation Date</th>
										<th >Fondation Title</th>
										<th >Fondation Details</th>
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($foundationList) {
										$serial = 0;
										foreach ($foundationList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						<td >
<img src="<?php echo base_url().$list->foundation_image?>" style="height: 200px;width: 200px;">					
						</td>
						<td><?= $list->date ?></td>
                       
                        	<td><?= $list->foundation_title ?></td>
                       
                        	<td><?= $list->foundation_details ?></td>
                      <td >
<a href="<?php echo base_url()?>edit-foundation-list/<?php echo $list->id?>" id="">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-foundation-list/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button  style="margin:10px;"type='button' class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-foundation-list/<?php echo $list->id?>" id="<?= $list->id ?>">
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
