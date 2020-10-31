<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Copyright </h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_footer') ?>">
							<button type='button' id="" class='btn bg-success'>Create New Copyright</i>
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
										<th >Year</th>
										<th >Company Name</th>
										<th >Design By</th>
                                        <th >Developed By</th>
                                        <th >Only On</th>
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($footerList) {
										$serial = 0;
										foreach ($footerList->result() as $list) {
											$serial++;


									?>
											<tr>
												<td><?= $serial ?></td>
												<td ><?= $list->year ?></td>
												<td ><?= $list->company_name ?></td>
                                                <td >
                                               <?= $list->design?>
                                                
                                                </td>


												<td >
													  <?= $list->developed ?>
												</td>
												<td >
													  <?= $list->only_on?>
												</td>
												<td >
													<a href="#" id="<?= $list->id ?>">
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
