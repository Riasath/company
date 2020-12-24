
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#117A8B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Feedback section place after the our vision section in about page</h3>
					</div>

					
				</div>


			</div>

			<?= alert_check() ?>
			 <?php
        $message=$this->session->userdata('message');
        if($message){

          echo "<span class='alert alert-danger'>$message</span>";
          $this->session->unset_userdata('message');
        } 
        ?>
	
		<section class="content" style="margin-top:20px">
	<a href="<?php echo base_url('Admin/add_feedback') ?>">
							<button style="margin:20px; "type='button' id="" class='btn bg-info'>Create New Feedback</i>
							</button></a>
									
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th >Serial</th>
										<th > Feedback Description</th>
										
										<th >Author Image</th>
										<th >Author Name</th>
										<th >Author Market</th>
                                        <th >Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($feedbackList) {
										$serial = 0;
										foreach ($feedbackList->result() as $list) {
											$serial++;


									?>
					<tr>
						<td><?= $serial ?></td>
						<td><?= $list->description ?></td>
						<td >
<img src="<?php echo base_url().$list->image?>" style="height:80pxpx;width:50px;">					
						</td>
						
                       
                        	
                       
                        	<td><?= $list->author ?></td>
                        	<td><?= $list->market ?></td>
                      <td >
<a href="<?php echo base_url()?>edit-feedback/<?php echo $list->id?>" id="">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>

<a href="<?php echo base_url()?>delete-feedback/<?php echo $list->id?>" id="<?= $list->id ?>">
	<button style="margin:10px;" type='button'  onclick="return confirm('Are you sure you want to delete this item?');" class='btn bg-danger'>Delete<i class='fas fa-times'></i>
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
