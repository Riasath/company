
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title" style="margin-left: 200px;">
						User Contact Information
					</h3>
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
										
										<th >Permalink</th>
										<th >Name</th>
										<th >Phone</th>
										<th >Email</th>
										<th >Company</th>
										<th >Message</th>
										
										
                                       
									</tr>
								</thead>
								<tbody>
									<?php
									if ($informationList) {
										$serial = 0;
										foreach ($informationList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						
						
                       
                        	<td><?= $list->permalink ?></td>
                       
                        	<td><?= $list->name ?></td>
                        	<td><?= $list->phone ?></td>
                        	<td><?= $list->email ?></td>
                        	<td><?= $list->company ?></td>
                        	<td><?= $list->message ?></td>
                        	
                        	
                 
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
