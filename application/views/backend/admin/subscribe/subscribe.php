
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#E0A800; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title" style="margin-left: 200px;">
						User Subscribe Gmail Address
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
										
										<th >Users Gmail</th>
								
										
										
                                       
									</tr>
								</thead>
								<tbody>
									<?php
									if ($subscribeList) {
										$serial = 0;
										foreach ($subscribeList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						
						
                       
                        	<td><?= $list->gmail ?></td>
                       
                        
                        	
                        	
                 
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
