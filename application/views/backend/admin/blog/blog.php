<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Blog </h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_blog') ?>">
							<button type='button' id="" class='btn bg-danger'>Create New Blog</i>
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
										<th>Serial</th>
										<th>Date</th>
										<th>Blog Title</th>
										<th >Blog Details</th>
										<th>Avatar</th>


										<th>Posted By</th>
                                        <th>Action</th>
                                       
                                       
									</tr>
								</thead>
								<tbody>
									<?php
									if ($blogList) {
										$serial = 0;
										foreach ($blogList->result() as $list) {
											$serial++;


									?>
											<tr>
												<td><?= $serial ?></td>
												<td ><?= $list->date?></td>
												<td ><?= $list->blog_title ?></td>
                                                <td >
                                               <?= $list->blog_details ?>
                                                
                                                </td>

                                                   <td >
                                 <img src="<?php echo base_url().$list->avatar?>">            
                                                
                                                </td>
                                                 <td >
                                               <?= $list->posted_by ?>
                                                
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
