

<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">This is the main menu section.Simplly add new menu items</h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_mainmenu') ?>">
							<button type='button' id="" class='btn bg-success'>Add New Menu</i>
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
										
										<th >Menu Id</th>
										<th >Menu Name</th>
										<th >Menu URL</th>
										<th >Menu Description</th>
										<th >Menu Created Time</th>
										
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($mainmenuList) {
										$serial = 0;
										foreach ($mainmenuList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						
						
                       
                        	<td><?= $list->m_id ?></td>
                       
                        	<td><?= $list->m_name ?></td>
                        	<td><?= $list->m_url ?></td>
                        	<td><?= $list->m_desc ?></td>
                        	<td><?= $list->m_created_at ?></td>
                        	
                      <td >
<a href="<?php echo base_url()?>edit-mainmenu/<?php echo $list->m_id?>" id="">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-mainmenu/<?php echo $list->m_id?>" id="<?= $list->m_id ?>">
	<button  style="margin:10px;"type='button' class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-mainmenu/<?php echo $list->m_id?>" id="<?= $list->m_id ?>">
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
