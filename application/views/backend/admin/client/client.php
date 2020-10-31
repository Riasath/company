<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Client</h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_client') ?>">
							<button type='button' id="" class='btn bg-danger'>Create New Client</i>
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
										<th >Client Image</th>
										
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($clientList) {
										$serial = 0;
										foreach ($clientList->result() as $list) {
											$serial++;


									?>
											<tr>
												<td><?= $serial ?></td>
												
												<td>
                                                
                                                <img src="<?php echo base_url().$list->client_image?>">
                                                </td>


												<td >
													<a href="#" id="<?= $list->client_id ?>">
														<button type='button' class='btn bg-danger'><i class='fas fa-user-edit'></i>
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
