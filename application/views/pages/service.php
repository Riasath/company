<div class="content-wrapper">

	<!-- Stunning Header -->

	<div class="stunning-header stunning-header-bg-violet"
	style="background-image: url('<?php echo base_url('assets/images/pattern-bg-violet.jpg')?>');">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title">Our Services</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="index-2.html">Home</a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span href="#">Our Services</span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>

	<!-- End Stunning Header -->

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
	</div>

	<!-- End Overlay Search -->


	<!-- Services Items -->


	<div class="container">
		<div class="row pt120 pb30">
  <?php foreach($all_agency as $v_agency){?>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="services-main">
<div class="heading">
<h4 class="h1 heading-title">
	<?php echo $v_agency->title;?>
</h4>
<div class="heading-line">
	<span class="short-line"></span>
	<span class="long-line"></span>
</div>
<p class="heading-text">
	<?php echo $v_agency->details;?>
</p>
</div>

<a href="#" class="btn btn-medium btn--dark btn-hover-shadow">
<span class="text">Free SEO Analysis</span>
<span class="semicircle"></span>
</a>
</div>
</div>
	<?php }?>


           <?php foreach($all_service as $v_service){?>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-bottom:20px;">
	<div class="servises-item bg-violet-color">
		<div class="servises-item__thumb">
<img src="<?php echo $v_service->image?>">
		</div>
<div class="servises-item__content">
	<h4 class="servises-title">
	<?php echo $v_service->title;?>
</h4>
	<p class="servises-text">
	<?php echo $v_service->details;?>
	</p>
</div>

		<a href="04_service_detail_seo.html" class="read-more"><i class="seoicon-right-arrow"></i></a>

	</div>
</div>
			<?php }?>

			
		</div>

		
	</div>


	<!-- End Services Items -->


	<!-- Features Item -->


	<div class="container-fluid">
		<div class="row bg-border-color medium-padding120">
			<div class="container">
				<div class="row pb30">
 <?php foreach($all_feature as $v_feature){?>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="features-item">

		<div class="features-item__thumb">
			<img src="<?php echo $v_feature->image?>">
		</div>

		<div class="features-content">
			<a href="#" class="features-title">
			<?php echo $v_feature->title;?>
		</a>
			<p class="features-text">

				<?php echo $v_feature->details;?>	
			</p>
		</div>

		<a class="read-more" href="#">Read More
			<i class="seoicon-right-arrow"></i>
		</a>

	</div>
</div>
<?php }?>

					

					
				</div>

				
			</div>
		</div>
	</div>

	<!-- End Features Item -->

<?php foreach($all_product as $v_product){?>
	<div class="container pb120 pt120">
		<div class="row">
			<div class="col-lg-12">
<div class="heading">
	<h4 class="h1 heading-title">
<?php echo $v_product->title;?>
</h4>
	<div class="heading-line">
		<span class="short-line"></span>
		<span class="long-line"></span>
	</div>
	<p class="heading-text c-dark">
		<?php echo $v_product->details;?>
	</p>
</div>
			</div>
		</div>

<div class="row pb30">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<ul class="list list--secondary">
		<li>
			<i class="seoicon-check"></i>
			<a href="#">
		<?php echo $v_product->section1;?>		
			</a>
		</li>
	</ul>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<ul class="list list--secondary">
		<li>
			<i class="seoicon-check"></i>
			<a href="#">
		<?php echo $v_product->section2;?>		
			</a>
		</li>
	</ul>
</div>
</div>

		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb30">
				<a href="#" class="btn btn-medium btn--blue">
					<span class="text">Free SEO Consultation</span>
					<span class="semicircle"></span>
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb30">
				<a href="#" class="btn btn-medium btn--yellow">
					<span class="text">Request a Free Quote</span>
					<span class="semicircle"></span>
				</a>
			</div>
		</div>
	</div>
	<?php }?>
	<div class="container-fluid">
		<div class="row medium-padding120 bg-boxed-black" style="background-image: url('<?php echo base_url('assets/images/bg-boxed-black.jpg')?>');">
			<div class="container">
				<div class="row">
	<?php foreach($all_quality as $v_quality){?>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="heading">

	<h4 class="h1 heading-title c-white">
	
	<?php echo $v_quality->title;?>	
</h4>

	<div class="heading-line">
		<span class="short-line"></span>
		<span class="long-line"></span>
	</div>

	<p class="mb30">
		<?php echo $v_quality->details;?>	
	</p>

</div>

<a href="21_seo_analysis.html" class="btn btn-medium btn--olive btn-hover-shadow mb30">
	<span class="text">Free SEO Consultation</span>
	<span class="semicircle"></span>
</a>
</div>
<?php }?>

					<div class="col-lg-7 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
						<div class="skills">
			<?php foreach($all_qualityitem as $v_qualityitem){?>				
		<div class="skills-item">
<div class="skills-item-info">
<span class="skills-item-title">
<?php echo $v_qualityitem->title;?>	
</span>
<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" 
	data-to="<?php echo $v_qualityitem->value;?>" data-from="0"></span><span class="units">%</span></span>
</div>
<div class="skills-item-meter">
<span class="skills-item-meter-active bg-orange-color border-orange-color" style="width:<?php echo $v_qualityitem->value;?>%">
</span>
</div>
		</div>
		<?php }?>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
		<div class="container-fluid">
		<div class="row medium-padding120 bg-orange-color">
			<div class="container">
				<?php foreach($all_tools as $v_tools){?>
				<div class="row mb30">
<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
	<div class="heading align-center">
		<h4 class="h1 heading-title">
		<?php echo $v_tools->title;?>	
	</h4>
		<div class="heading-line">
			<span class="short-line bg-yellow-color"></span>
			<span class="long-line bg-yellow-color"></span>
		</div>
		<p class="heading-text c-white">
		<?php echo $v_tools->details;?>	
	</p>
	</div>

</div>

				</div>
				<?php }?>

				<div class="row">
						<?php foreach($all_tools_box as $v_tools_box){?>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

	<div class="info-box--standard">
		<div class="info-box-image">
			<img src="<?php echo $v_tools_box->image?>">
		</div>
		<div class="info-box-content">
			<h5 class="info-box-title">
			<?php echo $v_tools_box->title;?>	
		</h5>
			<p class="text c-white">
			<?php echo $v_tools_box->details;?>	
			</p>
		</div>
	</div>

					</div>
						<?php }?>
           </div>
			</div>
		</div>
	</div>

	<!-- End Info Box -->


	<!-- Contact Form -->


	<div class="container">
		<?php foreach($all_contact as $v_contact){?>
		<div class="row pt120">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="heading">
	<h4 class="h1 heading-title">
	<?php echo $v_contact->title;?>
</h4>
	<div class="heading-line">
		<span class="short-line"></span>
		<span class="long-line"></span>
	</div>

	<p>
		<?php echo $v_contact->details;?>
	</p>
</div>
</div>
		</div>
		<?php }?>

		<div class="row pb120">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div>
<form class="contact-form" method="post" 
action="<?php echo base_url()?>save-contact-form">
	<div class="row">

		<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<input name="permalink" class="email input-standard-grey" placeholder="Website URL" type="url">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input name="name" class="email input-standard-grey" required placeholder="Your Name" type="text">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input name="phone" class="email input-standard-grey" placeholder="Phone" type="text">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input name="email" class="email input-standard-grey" required placeholder="Email Address" type="email">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input name="company" class="email input-standard-grey" placeholder="Company" type="text">
				</div>
			</div>
		</div>

		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
			<textarea name="message" class="email input-standard-grey" required placeholder="Details" style="height: 250px;"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="submit-block table">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 table-cell">
				<button class="btn btn-medium btn--breez btn-hover-shadow">
					<span class="text">Send Inquiry</span>
					<span class="semicircle"></span>
				</button>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 table-cell">
				<div class="submit-block-text">
					Please, let us know any particular things to check and the best time
					to contact you by phone (if provided).
				</div>
			</div>
		</div>
	</div>
</form>
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
	
		<form class="subscribe-form" method="post" action="<?php echo base_url()?>save-subscribe">
		<input class="email input-standard-grey input-white" name="gmail" required="required" placeholder="Your Email Address" type="text">
		<button class="subscr-btn">subscribe
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