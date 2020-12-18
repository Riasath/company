
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#138496 ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title" >
						User Contact Details</br>
						Main menu ->Contact page->contact form data
						
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
										
										
										<th >Name</th>
										
										<th >Email</th>
										<th >Phone</th>
										
										<th >Message</th>
										
										
                                       
									</tr>
								</thead>
								<tbody>
									<?php
									if ($contactformList) {
										$serial = 0;
										foreach ($contactformList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						
						
                       
                        	
                       
                        	<td><?= $list->name ?></td>
                        	    	<td><?= $list->gmail ?></td>
                        	<td><?= $list->phone ?></td>
                    
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
