<div class="content-wrapper">

	<!-- Stunning header -->





	<div class="stunning-header stunning-header-bg-lightblue"
	style="background-image: url('<?php echo base_url('assets/images/pattern-bg-lightblue.jpg')?>');">
		<div class="stunning-header-content" >
			<h1 class="stunning-header-title">About Our Agency</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?php echo base_url()?>home">Home</a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span>About Our Agency</span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>

	<!-- End Stunning header -->
	<div class="container">
		
	
		<div class="row pt120" style="margin-top: -100px;">
			  <?php foreach($all_db_story as $v_story){?>
			<div class="col-lg-12">
				<div class="heading mb30">
					<h4 class="h1 heading-title">
						<?php echo $v_story->short_story_heading;?>
					</h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>

					<h5 class="heading-subtitle">
						<?php echo $v_story->short_story_title;?>
					</h5>
				</div>
			</div>

			<div class="col-lg-6">
				<p>
					<?php echo $v_story->short_story_subtitle1;?>
				</p>
			</div>

			<div class="col-lg-6">
				<p>
					<?php echo $v_story->short_story_subtitle2;?>
				</p>
			</div>
<?php }?>
		</div>
	
	
	</div>


	<!-- Time line -->

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<section class="cd-horizontal-timeline">
					<div class="timeline">
						<div class="events-wrapper">
							<div class="events">
									<ol>
									<li><a href="#0" data-date="16/12/2011" class="selected">2011</a></li>
									<li><a href="#0" data-date="28/09/2012">2012</a></li>
									<li><a href="#0" data-date="05/01/2013">2013</a></li>
									<li><a href="#0" data-date="10/09/2014">2014</a></li>
									<li><a href="#0" data-date="07/05/2015">2015</a></li>
									<li><a href="#0" data-date="20/12/2016">2016</a></li>
									<!-- other dates here -->
								</ol>

								<span class="filling-line" aria-hidden="true"></span>
							</div> <!-- .events -->
						</div> <!-- .events-wrapper -->

						<ul class="cd-timeline-navigation">
							<li><a href="#0" class="prev inactive seoicon-play">Prev</a></li>
							<li><a href="#0" class="next seoicon-play">Next</a></li>
						</ul> <!-- .cd-timeline-navigation -->
					</div> <!-- .timeline -->

					<div class="events-content">
						<ol>
							  <?php foreach($all_foundation as $v_foundation){?>
							<li class="selected" data-date="16/12/2011">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 table-cell">
			<div class="time-line-thumb">
				<img src="<?php echo $v_foundation->foundation_image?>">
			</div>
									</div>

									<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-9 col-xs-12 table-cell">
			<div class="time-line-content">
				<h6 class="time-line-subtitle">
				<?php echo $v_foundation->date;?>	
				</h6>
				<h5 class="time-line-title">
					<?php echo $v_foundation->foundation_title;?>
				</h5>
				<p class="time-line-text">
						<?php echo $v_foundation->foundation_details;?>
				</p>
			</div>
									</div>
								</div>

							</li>
							<?php }?>

								<li data-date="28/09/2012">

								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 table-cell">
										<div class="time-line-thumb">
											<img src="assets/images/time-line-thumb.png" alt="time-line">
										</div>
									</div>

									<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-9 col-xs-12 table-cell">
										<div class="time-line-content">
											<h6 class="time-line-subtitle">Sept, 2012</h6>
											<h5 class="time-line-title">Foundation of the Company</h5>
											<p class="time-line-text">Investigationes demonstraverunt lectores legere me lius quod ii legunt
												saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
												lectorum. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
												lobortis nisl ut aliquip ex commodo est usus legentis in iis qui facit eorum.
											</p>
										</div>
									</div>
								</div>

							</li>

							

							<!-- other descriptions here -->
						</ol>
					</div> <!-- .events-content -->
				</section>

			</div>

		</div>

	</div>

	<!-- End Time line -->


	<!-- Slider Profit -->

	<div class="section bg-greendark-color">

		<div class="container">

			<div class="slider-profit-wrap">

				<!-- Slider main container -->
				<div class="swiper-container auto-height pagination-vertical" data-direction="vertical" data-loop="false" data-mouse-scroll="true">

					<div class="swiper-wrapper">
 <?php foreach($all_work as $v_work){?>
<div class="slider-profit swiper-slide" style="margin-top:20px;" >

	<div class="row medium-padding120">
			<div class="swiper-pagination" style="margin-left: -90px;"></div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="heading">
				<h4 class="h1 heading-title c-white mb30">
		<?php echo $v_work->title;?>	
				</h4>
				<p class="c-white">
		<?php echo $v_work->details;?>	
				</p>
			</div>

			<a href="<?= base_url()?>portfolio" class="btn btn-medium btn--dark btn-hover-shadow">
				<span class="text">Read More</span>
				<span class="semicircle"></span>
			</a>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="slider-profit-thumb">
		<img src="<?php echo $v_work->image;?>">	
			</div>
		</div>
	</div>

</div>
	<?php }?>




						

					<!-- If we need pagination -->
					
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- End Slider Profit -->


	<!-- Team members -->

	<div class="container">
		<div class="row pt120 mb30">
		<?php foreach($all_expert as $v_expert){?>
			<div class="col-lg-12">
		
  
				<div class="heading align-center">
					<h4 class="h1 heading-title">
						<?php echo $v_expert->title;?>
					</h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>
					<p class="heading-text">
						<?php echo $v_expert->details;?>
					</p>
				</div>
			</div>
			<?php }?>

		</div>

		<div class="row pb120">
<?php foreach($all_team as $v_team){?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"
			>
				
<div class="teammembers-item">
<img src="<?php echo $v_team->image?>" style="height:160px;width:230px;">
<h5 class="teammembers-item-name">
	<?php echo $v_team->name;?>
</h5>
<p class="teammembers-item-prof">
	<?php echo $v_team->post;?>
</p>
<div class="socials">

<a href="<?=$v_team->fblink?>" class="social__item">
	<img src="<?php echo $v_team->fbimage?>">
</a>

<a href="<?=$v_team->ylink?>" class="social__item">
	<img src="<?php echo $v_team->yimage?>">
</a>

<a href="<?=$v_team->glink?>" class="social__item">
	<img src="<?php echo $v_team->gimage?>">
</a>

<a href="<?=$v_team->tlink?>" class="social__item">
	<img src="<?php echo $v_team->timage?>">
</a>

</div>
					
				</div>
				

			</div>
			<?php }?>
			


			
		</div>
	</div>

	<!-- End Team members -->


	<!-- Info boxes -->


	<div class="container-fluid">
		<div class="row medium-padding120 bg-border-color">
			<div class="container">
				<div class="row">
					<?php foreach($all_promo as $v_promo){?>
					<div class="col-lg-4 col-md-4 col-sm-12 col-sx-12">
<div class="info-box--standard">
	<div class="info-box-image f-none">
<img src="<?php echo $v_promo->image?>">
	</div>
	<div class="info-box-content">
		<h5 class="info-box-title">
		<?php echo $v_promo->title;?>
	</h5>
		<p class="text">
			<?php echo $v_promo->details;?>
		</p>
	</div>
</div>
					</div>
					<?php }?>

					

					
				</div>
			</div>
		</div>
	</div>

	<!-- End Info boxes -->

	<!-- Our vision -->

	<div class="container-fluid">
		<div class="row bg-orangedark-color">
<?php foreach($all_vision as $v_vision){?>
			<div class="our-vision scrollme">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
	<div class="heading align-center">
		<h4 class="h1 heading-title">
		<?php echo $v_vision->title;?>
	</h4>
		<div class="heading-line">
			<span class="short-line bg-yellow-color"></span>
			<span class="long-line bg-yellow-color"></span>
		</div>
		<p class="heading-text c-white">
			<?php echo $v_vision->details;?>
		</p>
	</div>
						</div>
					</div>
				</div>

<img src="<?php echo $v_vision->image1?>" class="element">
<img src="<?php echo $v_vision->image2?>" class="eye">
			</div>
  <?php }?>

		</div>
	</div>


	<!-- End Our vision -->


	<!-- Testimonial slider -->


	<div class="container-fluid">
		<div class="row medium-padding120 bg-border-color">
			<div class="container">

				<div class="testimonial-arrow-slider">

					<div class="row">

						<div class="col-lg-12">
							<div class="heading">
								<h4 class="h1 heading-title">Our Customers Say</h4>
								
								<div class="heading-line">
									<span class="short-line"></span>
									<span class="long-line"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="swiper-container pagination-bottom">

							<div class="swiper-wrapper">
      <?php foreach($all_feedback as $v_feedback){?>
								<div class="case-slider-item swiper-slide">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="testimonial-item testimonial-arrow mb30">
	<div class="testimonial-text">
			<?php echo $v_feedback->description;?>
	</div>


	<div class="author-info-wrap table">
		<div class="testimonial-img-author table-cell">
			<img src="<?php echo $v_feedback->image?>">
		</div>
		<div class="author-info table-cell">
			<h6 class="author-name">
				<?php echo $v_feedback->author;?>
			</h6>
			<div class="author-company c-primary">
				<?php echo $v_feedback->market;?>
		</div>
		</div>
	</div>

	<div class="quote">
		<i class="seoicon-quotes"></i>
	</div>

</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <div class="testimonial-item testimonial-arrow mb30">
	<div class="testimonial-text">
		<?php echo $v_feedback->description;?>
	</div>

	<div class="author-info-wrap table">
		<div class="testimonial-img-author table-cell">
				<img src="<?php echo $v_feedback->image?>">
		</div>
		<div class="author-info table-cell">
			<h6 class="author-name">
				<?php echo $v_feedback->author;?>
			</h6>
			<div class="author-company c-primary">
				<?php echo $v_feedback->market;?>
			</div>
		</div>
	</div>

	<div class="quote">
		<i class="seoicon-quotes"></i>
	</div>

</div>

	</div>

	

</div>
 <?php }?>





</div>

							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- End Testimonial slider -->


	<!-- Clients -->

	<div class="container">
		<div class="row medium-padding120">
			<?php foreach($all_partner as $v_partner){?>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="heading">
<h4 class="h1 heading-title">
<?php echo $v_partner->title;?>
	
</h4>
<div class="heading-line">
	<span class="short-line"></span>
	<span class="long-line"></span>
</div>
<p class="heading-text">
	<?php echo $v_partner->details;?>
</p>
</div>

			</div>
			 <?php }?>

			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="clients-item-wrap">
                  <?php foreach($all_partner_image as $v_partner){?>
	<div class="client-item mb60">
		<a href="#" class="client-image">
			<img src="<?php echo $v_partner->image?>" class="hover">
		</a>
	</div>
							 <?php }?>

						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Clients -->


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
							<img src="assets/images/subscr-gear.png" alt="gear" class="gear">
							<img src="assets/images/subscr1.png" alt="mail" class="mail">
							<img src="assets/images/subscr-mailopen.png" alt="mail" class="mail-2">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>