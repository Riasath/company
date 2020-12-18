 
<div class="content-wrapper">

	<!-- Main Slider -->
 <div class="container">
		<div class="row medium-padding120">

			<div class="col-lg-12">

				<div class="heading align-center">
					<h4 class="h1 heading-title">We Help Over 80 Companies</h4>
				</div>

				<ul class="cat-list align-center sorting-menu">

	<li class="cat-list__item active" data-filter="*"><a href="#" class="">All Projects</a></li>
	<li class="cat-list__item" data-filter=".android"><a href="#" class="">Android</a></li>
	<li class="cat-list__item" data-filter=".web_development"><a href="#" class="">Web Development</a></li>
	<li class="cat-list__item" data-filter=".web_design"><a href="#" class="">Web Design</a></li>
	<li class="cat-list__item" data-filter=".software_development"><a href="#" class="">Software Development</a></li>
	<li class="cat-list__item" data-filter=".demo"><a href="#" class="">Demo</a></li>

				</ul>


	<div class="row sorting-container" data-layout="fitRows">
					<div class="grid-sizer col-lg-4 col-md-4"></div>
	  <?php foreach($android_items as $v_items){?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sorting-item android " >
		<div class="case-item align-center mb60">
			<div class="case-item__
			thumb mouseover lightbox shadow animation-disabled">
				<img src="<?php echo $v_items->image?>" >
			</div>
			<h6 class="case-item__title">
			<?php echo $v_items->title;?>

		</h6>
			<div class="case-item__cat">
				<h5>
						<?php echo $v_items->details;?>
				</h5>
			
			</div>
		</div>
	</div>
	<?php }?>

<?php foreach($web_development as $v_items){?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sorting-item web_development ">
<div class="case-item align-center big mb60">
	<div class="case-item__thumb mouseover lightbox shadow animation-disabled">
	<img src="<?php echo $v_items->image?>" >
	</div>
	<h5 class="case-item__title">
	<?php echo $v_items->title;?>
	</h5>
	<div class="case-item__cat">
     <h5>
<?php echo $v_items->details;?>
	</h5>
	</div>
</div>
</div>
<?php }?>
<?php foreach($web_design as $v_items){?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sorting-item web_design">
<div class="case-item align-center big  mb60">
	<div class="case-item__thumb mouseover lightbox shadow animation-disabled">
	<img src="<?php echo $v_items->image?>" >
	</div>
	<h5 class="case-item__title">
	<?php echo $v_items->title;?>

</h5>
	<div class="case-item__cat">
	<h5>
		<?php echo $v_items->details;?>
	</h5>
		
	</div>
</div>
</div>
<?php }?>

<?php foreach($software as $v_items){?>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sorting-item software_development ">
	<div class="case-item align-center mb60">
		<div class="case-item__thumb mouseover lightbox shadow animation-disabled">
			<img src="<?php echo $v_items->image?>" >
		</div>
		<h6 class="case-item__title">
	<?php echo $v_items->title;?>
     </h6>
		<div class="case-item__cat">
			<h5>
				<?php echo $v_items->details;?>
            </h5>
		</div>
	</div>
</div>
<?php }?>


<?php foreach($demo as $v_items){?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sorting-item demo">
<div class="case-item align-center mb60">
<div class="case-item__thumb mouseover lightbox shadow animation-disabled">
		<img src="<?php echo $v_items->image?>" >
</div>
<h6 class="case-item__title">
	<?php echo $v_items->title;?>
</h6>
<div class="case-item__cat">
	<h5>
		<?php echo $v_items->details;?>
	</h5>
</div>
</div>
</div>
<?php }?>

					

				</div>

			

			</div>

		</div>
	</div>
</div>
<!-- Subscribe Form -->

	<div class="container-fluid bg-green-color">
		<div class="row">
			<div class="container">

				<div class="row">

					<div class="subscribe scrollme">

<div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
	<h4 class="subscribe-title">Email Newsletters!</h4>
	
		<form  action="<?php echo base_url()?>save-subscribe" method="post" enctype="multipart/form-data">
<input required class="email input-standard-grey input-white" name="gmail"  placeholder="Your Email Address" type="text">
		<button  style="background:#2F2C2C;color: #ffffff;height: 50px;width: 100px;border-radius: 10px;margin-top: -100PX; "class="subscr-btn">subscribe
			<span class="semicircle--right"></span>
		</button>
</form>
		
	<div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

</div>

						<div class="images-block">
							<img src="<?php echo base_url('assets/images/subscr-gear.png')?>" alt="gear" class="gear">
							<img src="<?php echo base_url('assets/images/subscr1.png')?>" alt="mail" class="mail">
							<img src="<?php echo base_url('assets/images/subscr-mailopen.png')?>" alt="mail" class="mail-2">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
