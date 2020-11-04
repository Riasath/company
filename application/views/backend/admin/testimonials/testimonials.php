<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Testimonials </h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_testimonials') ?>">
							<button type='button' id="" class='btn bg-danger'>Create New Testimonials</i>
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
										<th >Testimonials Author</th>
										<th >Testimonials Text</th>
										<th >Testimonials Company</th>
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($testimonialsList) {
										$serial = 0;
										foreach ($testimonialsList->result() as $list) {
											$serial++;


									?>
											<tr>
												<td><?= $serial ?></td>
												<td ><?= $list->testi_author ?></td>
												<td ><?= $list->testi_text ?></td>
                                                <td >
                                               <?= $list->testi_company ?>
                                                
                                                </td>


												<td >
	<a href="<?php echo base_url()?>edit-testimonials-list/<?php echo $list->testi_id?>" id="<?= $list->testi_id ?>">
	<button type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-testimonials-list/<?php echo $list->testi_id?>" id="<?= $list->testi_id ?>">
	<button type='button' class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-testimonials-list/<?php echo $list->testi_id?>" id="<?= $list->testi_id ?>">
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
