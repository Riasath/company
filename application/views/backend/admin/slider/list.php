
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Slider</h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_slider') ?>">
							<button type='button' id="" class='btn bg-success'>Create New Slider</i>
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
										<th >Description</th>
										<th >About</th>
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
												<td ><?= $list->slider_about ?></td>
                                                <td >
                                                <img src="<?php echo base_url().$list->slider_image?>"
                                                style="height:100px;width:150px;" >
                                                
                                                </td>


												<td >
													<a href="#" id="<?= $list->slider_id ?>">
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
