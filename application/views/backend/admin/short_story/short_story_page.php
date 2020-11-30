
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Short Story Location in about pagebelow the main menu</h3>
					</div>

					<div class="col-md-2">
						<a href="<?php echo base_url('Admin/add_short_story') ?>">
							<button type='button' id="" class='btn bg-success'>Create New Short Story</i>
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
										<th >Short Story Heading</th>
										<th >Short Story Title</th>
										<th >Short Story SubTitle1</th>
										<th >Short Story SubTitle2</th>
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($shortstoryList) {
										$serial = 0;
										foreach ($shortstoryList->result() as $list) {
											$serial++;


									?>
											<tr>
												<td><?= $serial ?></td>
												<td ><?= $list->short_story_heading ?></td>
												<td><?= $list->short_story_title ?></td>
                                               
                                                	<td><?= $list->short_story_subtitle1 ?></td>
                                               
                                                	<td><?= $list->short_story_subtitle2 ?></td>
                                              <td >
<a href="<?php echo base_url()?>edit-shortstory-list/<?php echo $list->id?>" id="">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>
<a href="<?php echo base_url()?>view-shortstory-list/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button  style="margin:10px;"type='button' class='btn bg-primary'>View<i class='fas fa-eye'></i>
	</button>
</a>
<a href="<?php echo base_url()?>delete-shortstory-list/<?php echo $list->id?>" id="<?= $list->id ?>">
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
