

<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">
						If you add dropdown please first 
						</h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_dropdown') ?>">
							<button type='button' id="" class='btn bg-success'>Add Dropdown Item</i>
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
										
										<th >Main Menu Id</th>
										<th >Dropdown Menu Item Name</th>
										<th >Dropdown Menu Item URL</th>
										<th >Dropdown Menu Item Description</th>
										<th >Dropdown Menu Item Created Time</th>
										
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($dropdownList) {
										$serial = 0;
										foreach ($dropdownList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						
						
                       
                        	<td><?= $list->m_id ?></td>
                       
                        	<td><?= $list->m_item_name ?></td>
                        	<td><?= $list->m_item_url ?></td>
                        	<td><?= $list->m_item_desc ?></td>
                        	<td><?= $list->m_item_created_at ?></td>
                        	
                      <td >
<a href="<?php echo base_url()?>edit-dropdown/<?php echo $list->m_item_id?>" id="">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-dropdown/<?php echo $list->m_item_id?>" id="<?= $list->m_id ?>">
	<button  style="margin:10px;"type='button' class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-dropdown/<?php echo $list->m_item_id?>" id="<?= $list->m_id ?>">
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
