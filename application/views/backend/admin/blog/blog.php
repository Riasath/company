<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background:#23272B; ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Before Homepage Our Partner Section </h3>
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
<a href="<?php echo base_url('Admin/add_blog') ?>">
		<button type='button' id="" style="margin:20px;" class='btn bg-dark'>Create New Blog</i>
		</button>
	</a>
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
	<a href="<?php echo base_url()?>edit-blog-list/<?php echo $list->id?>">
	<button  style="margin:10px;"type='button' class='btn bg-success'>Edit<i class='fas fa-user-edit'></i>
	</button>
</a>

<a href="<?php echo base_url()?>delete-blog-list/<?php echo $list->id?>" id="<?= $list->id ?>">
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
