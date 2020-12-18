 
<div class="content-wrapper">

	<div class="stunning-header stunning-header-bg-blue"
	style="background-image: url('<?php echo base_url('assets/images/pattern-bg-blue.jpg')?>');">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title">Contact Information</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="index-2.html">Home</a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span href="#">Contact Information</span>
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
	</div>
	<div class="container">
		<div class="row pt120 pb80">
			<?php foreach($contact_heading as $v_contact){?>
<div class="col-lg-12">
	<div class="heading">
		<h4 class="h1 heading-title">
		<?php echo $v_contact->title;?>
	</h4>
		<div class="heading-line">
			<span class="short-line"></span>
			<span class="long-line"></span>
		</div>
		<p class="heading-text">
			<?php echo $v_contact->details;?>
		</p>
	</div>
</div>
<?php }?>
		</div>
	</div>

	<p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7706036100026!2d90.3861121142428!3d23.755558384586863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a4126080df%3A0x29496f29fde8be6c!2sRTsoftBD!5e0!3m2!1sbn!2sbd!4v1602741024209!5m2!1sbn!2sbd" width="1000" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</p>
		  <?php foreach($contact_address as $v_address){?>
      <div id="container">
      	<p>
      		<h1>ADDRESS INFO</h1></br>
<h3>
	<?php echo $v_address->title;?>
</h3></br>
<h5>
House # <?php echo $v_address->house;?>
</h5></br>
<h5>
Cell:<?php echo $v_address->cellnum;?>
</br>
Office:<?php echo $v_address->officenum;?>
</br>
Support:<?php echo $v_address->supportnum;?>
</h5></br>
<h5>
	E-mail: <?php echo $v_address->gmail;?>
</br>
 Website:<?php echo $v_address->address;?>
</h5>
</br>

      	</p>
      </div>
      <?php }?>
	

	
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 <?php foreach($form_heading as $v_head){?>
		<div class="heading">
			<h4 class="heading-title">
			<?php echo $v_head->title;?>
		</h4>
			<div class="heading-line">

				<span class="short-line"></span>
				<span class="long-line"></span>
			</div>
			<p class="heading-text">
			<?php echo $v_head->details;?>
		</p>
		</div>
		 <?php }?>
				</div>
			</div>

<form   method="post" 
action="<?php echo base_url()?>contactform">
<div class="row">


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="name" class="email input-standard-grey" placeholder="Your Name" type="text" required>
</div>

</div>

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="gmail" class="email input-standard-grey" placeholder="Email Address" type="email" required>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="phone" class="email input-standard-grey" placeholder="Phone" type="text">
</div>

</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<textarea name="message" class="email input-standard-grey" placeholder="Details"></textarea>
</div>
</div>

<div class="row">
<div class="submit-block table">
<div class="col-lg-3 table-cell">
	<button class="btn btn-small btn--primary">
		<span class="text">Send</span>
	</button>
</div>

</div>
</div>
</form>
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
