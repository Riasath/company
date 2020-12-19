
<div class="content-wrapper">
	<div class="card-body">
		<div class="card card-primary">
			<div class="card-header" style="background: #218637;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Short Story Location in about pagebelow the main menu</h3>
					</div>
				</div>
                   </div>
	                 <?= alert_check() ?>

	                                 <?php
									if ($shortstoryList) {
									
										foreach ($shortstoryList->result() as $list) {
											


									?>
 <form action="<?php echo base_url()?>update-shortstory-list" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<h4>short Story Heading</h4>
					<input type="text" class="form-control" value="<?php echo $list->short_story_heading?>" name="short_story_heading" id="short_story_heading">
				</div>

    <input type="hidden" value="<?php echo $list->id ?>"name="id" id="id" ></br>
  
    	<div class="col-md-10">
			<h4>short Story Title </h4>
			<textarea rows="5" cols="60"  name="short_story_title" class="form-control" id="short_story_title" required >
		     <?php echo $list->short_story_title?>
	        </textarea>
	         </div>
			<div class="col-md-10">
			<h4>short Story Subtitle1</h4>
			<textarea rows="5" cols="60"  name="short_story_subtitle1" class="form-control" id="short_story_subtitle1" required >
		          <?php echo $list->short_story_subtitle1?>
	         </textarea>
	         </div>
			<div class="col-md-10">
					<h4>short Story Subtitle2</h4>
			<textarea rows="5" cols="60" class="form-control"  name="short_story_subtitle2" id="short_story_subtitle2" required >
				   <?php echo $list->short_story_subtitle2?>
			</textarea>
			</div>
            	</div>
				<button type="submit" style="margin:20px; " class="btn btn-success">Update</button>

				</form>
			
					<?php
										}
									}
									?>
		</div>	
		<div class="card-header" style="background: #218637;">
				<div class="row">
					<div class="col-md-10">
						<h3 class="card-title">Easy Way To Understand</h3>
					</div>

					
				</div>
                   </div>
              <img style="" class="img-fluid" src="<?php echo base_url('assets')?>/images/shortstory.png">		
		</div>

		</div>



		



<!-- /.card-body -->
