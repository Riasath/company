	
	<div class="content-wrapper">

	<!-- Stunning header -->

	<div class="stunning-header stunning-header-bg-orange" style="background-image: url('<?php echo base_url('assets/images/pattern-bg-lightblue.jpg')?>');">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title">Digital Service</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url()?>home">Home</a>
					<i class="seoicon-right-arrow"></i>
					<a href="<?= base_url()?>digital-service">Services</a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span href="#">Digital Service</span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>

	<!-- End Stunning header -->

	<!-- Overlay Search -->

	<div class="overlay_search">
		<div class="container">
			<div class="row">
				<div class="form_search-wrap">
					<form>
						<input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
						<a href="#" class="overlay_search-close">
							<span></span>
							<span></span>
						</a>
					</form>
				</div>
			</div>
		</div>
	</div><div class="container">
		  <?php foreach($all_dservice as $v_service){?>
		<div class="row pt120">
<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
<div class="heading align-center mb60">
<h4 class="h1 heading-title">
<?php echo $v_service->title;?>
y</h4>
<div class="heading-line">
	<span class="short-line"></span>
	<span class="long-line"></span>
</div>

<p class="heading-text">
	<?php echo $v_service->details;?>
</p>
</div>
</div>

<div class="col-lg-12 col-sm-12 col-xs-12">
<img src="<?php echo $v_service->image?>">
</div>

		</div>
		<?php }?>
	</div>

	<div class="container-fluid">
		<div class="row medium-padding120 bg-border-color">
			<div class="container">
					  <?php foreach($all_description as $v_des){?>
				<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12">
	<h5 class="mb30">

	<?php echo $v_des->title;?>	
	</h5>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<ul class="list list--secondary">
		<li>
			<i class="seoicon-check"></i>
			<a href="#">
				<?php echo $v_des->details1;?>
			</a>
		</li>
	</ul>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<ul class="list list--secondary">
		<li>
			<i class="seoicon-check"></i>
			<a href="#">
				<?php echo $v_des->details2;?>
			</a>
		</li>
	</ul>
</div>
</div>
					<?php }?>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row pt80 pb80 bg-boxed-blue" style="background-image: url('<?php echo base_url('assets/images/bg-boxed-blue.jpg')?>');">
			<div class="container">
  <?php foreach($all_tell as $v_tell){?>				
<div class="row">

	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 table-cell">

		<div class="heading">
			<h4 class="h1 heading-title c-white no-margin">
			<?php echo $v_tell->title;?>
		</h4>
			<p class="heading-text c-white no-margin">
			<?php echo $v_tell->details;?>
			</p>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 table-cell">
		<a href="<?php echo base_url()?>contact" class="btn btn-medium btn--dark btn-hover-shadow">
			<span class="text">Get a Free Service</span>
			<span class="semicircle"></span>
		</a>
	</div>

</div>
<?php }?>
			</div>
		</div>
	</div>

	<!-- Info Box -->

	<div class="container">
		  <?php foreach($all_levels as $v_levels){?>	
<div class="row pt120 mb30">

<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
<div class="heading align-center">
	<h4 class="heading-title h1">
	<?php echo $v_levels->title;?>
</h4>
	<div class="heading-line">
		<span class="short-line"></span>
		<span class="long-line"></span>
	</div>
	<p class="heading-text">
		<?php echo $v_levels->details;?>
	</p>
</div>
</div>

</div>
<?php }?>

		<div class="row mb30">
 <?php foreach($all_levelsbox as $v_levelsbox){?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<div class="info-box--modern">
		<div class="info-box-image">
			<img src="<?php echo $v_levelsbox->image?>">
		</div>
		<div class="info-box-content">
			<h5 class="info-box-title">
				<?php echo $v_levelsbox->title;?>
			</h5>
			<p class="text">
				<?php echo $v_levelsbox->details;?>
			</p>

			<a href="<?= base_url()?>service" class="read-more">Read More
				<i class="seoicon-right-arrow"></i>
			</a>
		</div>
	</div>
</div>
<?php }?>

			
		</div>


		<div class="row pb120">
			<div class="col-lg-3 col-lg-offset-3 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
				<a href="<?= base_url()?>portfolio" class="btn btn-medium btn--blue btn-hover-shadow mb30">
					<span class="text">Free Design</span>
					<span class="semicircle"></span>
				</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<a href="<?= base_url()?>portfolio" class="btn btn-medium btn--yellow btn-hover-shadow">
					<span class="text">Request a Free Sample Work</span>
					<span class="semicircle"></span>
				</a>
			</div>
		</div>

	</div>
	
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="heading mb60">
							<h4 class="h1 heading-title">RTSOFTBD APPLICATION TEAM</h4>

							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>

						</div>

						<ul class="accordion" id="accordion">
<?php foreach($all_accordon as $v_accordon){?>
<li class="accordion-panel">
	<div class="panel-heading">
		<a href="#<?php echo $v_accordon->idname;?>" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
            <span class="icon">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <i class="fa fa-angle-down active" aria-hidden="true"></i>
            </span>
			<span class="ovh">
			<?php echo $v_accordon->title;?>
		</span>
		</a>
	</div>

	<div id="<?php echo $v_accordon->idname;?>" class="panel-collapse collapse" aria-expanded="false" role="tree">
		<div class="panel-info">
		<?php echo $v_accordon->details;?>
		</div>
	</div>
</li>
<?php }?>
              </ul>
					</div>

	<div class="container">
		<?php foreach($all_brand as $v_brand){?>
		<div class="row pt120">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="heading mb60">
	<h4 class="h1 heading-title">
<?php echo $v_brand->title;?>
</h4>
	<div class="heading-line">
		<span class="short-line"></span>
		<span class="long-line"></span>
	</div>

	<h5 class="heading-subtitle">
<?php echo $v_brand->details;?>
</h5>

</div>
			</div>
		</div>
		<?php }?>

		<div class="row mb60">
	<?php foreach($all_brandbox as $v_brandbox){?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="pie-chart-item">
	<div class="pie-chart" data-value="0.<?php echo $v_brandbox->value;?>" data-start-color="#b9750f" data-end-color="#fc9700">
		<div class="content"><span><?php echo $v_brandbox->value;?></span>%</div>
	</div>

	<div class="pie-chart-content">
		<h4 class="pie-chart-content-title">
		<?php echo $v_brandbox->title;?>
	</h4>
		<p class="pie-chart-content-text">
			<?php echo $v_brandbox->details;?>
		</p>
		<a href="<?= base_url()?>about" class="more">Read More
			<i class="seoicon-right-arrow"></i>
		</a>
	</div>
</div>
</div>
<?php }?>

			
		</div>

		

	</div>

	<!-- End Info Box -->

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

	<!-- End Subscribe Form -->

</div>