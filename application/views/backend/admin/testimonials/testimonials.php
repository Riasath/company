<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #138294;">
				<div class="row">
					<div class="col-md-10">
						<h4 >Testimonials Before blog section </h4>
					</div>

				</div>




			</div>

			<?= alert_check() ?>
			<section class="content" style="margin-top:20px">
				<a href="<?php echo base_url('Admin/add_testimonials') ?>">
				<button type="button" style="margin-bottom:10px; " 
				href="" class="btn btn-info">Create Testimonials</button>
				</a>
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
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>

<a href="<?php echo base_url()?>delete-testimonials-list/<?php echo $list->testi_id?>" id="<?= $list->testi_id ?>">
	<button  style="margin:10px;"type='button' class='btn bg-danger'  onclick="return confirm('Are you sure you want to delete this item?');" >Delete<i class='fas fa-times'></i>
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
