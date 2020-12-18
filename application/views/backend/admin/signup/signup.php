
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#C82333; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title" style="margin-left: 200px;">
						User Signup Registration</br>
						
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
										
										<th >First Name</th>
										<th >Last Name</th>
										<th >Gmail</th>
										<th >Password</th>
										<th >Gender</th>
										<th >Terms</th>
										
										
                                       
									</tr>
								</thead>
								<tbody>
									<?php
									if ($signupList) {
										$serial = 0;
										foreach ($signupList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						
						
                       
                        	<td><?= $list->fname ?></td>
                       
                        	<td><?= $list->lname ?></td>
                        	<td><?= $list->gmail ?></td>
                        	<td><?= $list->password ?></td>
                        	<td><?= $list->gender ?></td>
                        	<td><?= $list->terms ?></td>
                        	
                        	
                 
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
