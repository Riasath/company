<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">

		<span class="brand-text font-weight-light">Admin</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url('') ?>assets/backend/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Manager</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview menu-open">
					<a href="<?php echo base_url('Welcome/test') ?>" class="nav-link <?= active_nav('dashboard', $main_nav); ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<!--								<i class="right fas fa-angle-left"></i>-->
						</p>
					</a>
				</li>

				<li class="nav-item has-treeview <?= active_open('appearance', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('appearance', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Appearance
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/popup') ?>" class="nav-link <?= active_nav('popup', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>PopUp</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/signup') ?>" class="nav-link <?= active_nav('signup', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>User Signup</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/sidebar') ?>" class="nav-link <?= active_nav('sidebar', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Sidebar</p>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/list_slider') ?>" class="nav-link <?= active_nav('slider_list', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Slider</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/subscribe') ?>" class="nav-link <?= active_nav('subscribe', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Subscribe</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/counter') ?>" class="nav-link <?= active_nav('counter', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Counter Item</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/testimonial_head') ?>" class="nav-link <?= active_nav('testimonial_head', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Testimonials Heading</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="<?php echo base_url('Admin/testimonials') ?>" class="nav-link <?= active_nav('testimonials', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Testimonials</p>
							</a>
						</li>
						
						
							<li class="nav-item">
							<a href="<?php echo base_url('Admin/blog') ?>" class="nav-link <?= active_nav('blog', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Blog</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/client_head') ?>" class="nav-link <?= active_nav('client_head', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Client Heading</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="<?php echo base_url('Admin/client') ?>" class="nav-link <?= active_nav('client', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Our Client</p>
							</a>
						</li>

							<li class="nav-item">
							<a href="<?php echo base_url('Admin/footer_top') ?>" class="nav-link <?= active_nav('footer_top', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Footer Top </p>
							</a>
						</li>

							<li class="nav-item">
							<a href="<?php echo base_url('Admin/footer_bottom') ?>" class="nav-link <?= active_nav('footer_bottom', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Footer Bottom </p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/footer_icon') ?>" class="nav-link <?= active_nav('footer_icon', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Footer Social Icon </p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/footermenu') ?>" class="nav-link <?= active_nav('footermenu', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Footer Menu </p>
							</a>
						</li>
							<li class="nav-item">
							<a href="<?php echo base_url('Admin/footer') ?>" class="nav-link <?= active_nav('footer', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Footer Copyright </p>
							</a>
						</li>

						
						
					</ul>
				</li>

				<li class="nav-item has-treeview <?= active_open('menu', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('menu', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Menu
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('admin/mainmenu') ?>" class="nav-link <?= active_nav('mainmenu', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Main Menu</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/dropdown') ?>" class="nav-link <?= active_nav('dropdown', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Dropdown Items</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/logo') ?>" class="nav-link <?= active_nav('logo', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Menu Logo</p>
							</a>
						</li>
						
					</ul>
				</li>

				
				<li class="nav-item has-treeview <?= active_open('about page', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('about page', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							About page
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/short_story') ?>" class="nav-link <?= active_nav('short_story', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Short Story</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/foundation') ?>" class="nav-link <?= active_nav('foundation', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Foundation</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/work') ?>" class="nav-link <?= active_nav('work', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Our Work</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/expert') ?>" class="nav-link <?= active_nav('expert', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Expert</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/team') ?>" class="nav-link <?= active_nav('team', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Team</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/promo') ?>" class="nav-link <?= active_nav('promo', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Promo</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/vision') ?>" class="nav-link <?= active_nav('vision', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Vision</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/feedback') ?>" class="nav-link <?= active_nav('feedback', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Feedback</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/partner') ?>" class="nav-link <?= active_nav('partner', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Partner</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Admin/partner_image') ?>" class="nav-link <?= active_nav('partner_image', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Partner-Images</p>
							</a>
						</li>
						
						
					</ul>
				</li>
				<li class="nav-item has-treeview <?= active_open('software service', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('software service', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
						Software  Service
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('admin/agency') ?>" class="nav-link <?= active_nav('agency', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Digital Agency</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/eservice_box') ?>" class="nav-link <?= active_nav('eservice_box', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Service Box</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/feature') ?>" class="nav-link <?= active_nav('feature', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Feature</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/product') ?>" class="nav-link <?= active_nav('product', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Our Product</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="<?php echo base_url('admin/quality') ?>" class="nav-link <?= active_nav('quality', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Quality Skills</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/qualityitem') ?>" class="nav-link <?= active_nav('qualityitem', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Quality Items</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/tools') ?>" class="nav-link <?= active_nav('tools', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p> Tools</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/tools_box') ?>" class="nav-link <?= active_nav('tools_box', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p> Tools Box</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/contact') ?>" class="nav-link <?= active_nav('contact', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p> Contact</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/information') ?>" class="nav-link <?= active_nav('information', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p> Information</p>
							</a>
						</li>
						

						
						
					</ul>
				</li>
				<li class="nav-item has-treeview <?= active_open('dservice', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('dservice', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
						Digital Service
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('admin/dservice') ?>" class="nav-link <?= active_nav('service', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Service </p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/description') ?>" class="nav-link <?= active_nav('description', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Description </p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/tell') ?>" class="nav-link <?= active_nav('tell', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tell Us</p>
							</a>
							
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/levels') ?>" class="nav-link <?= active_nav('levels', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Levels</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/levelsbox') ?>" class="nav-link <?= active_nav('levelsbox', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Levelsbox</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/accordon') ?>" class="nav-link <?= active_nav('accordon', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Accordon</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/brand') ?>" class="nav-link <?= active_nav('brand', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Brand</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/brandbox') ?>" class="nav-link <?= active_nav('brandbox', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Brandbox</p>
							</a>
						</li>
						
					</ul>
				</li>

					<li class="nav-item has-treeview <?= active_open('contact', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('contact', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Contact
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('admin/contact_head') ?>" class="nav-link <?= active_nav('contact_head', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Contact Page Heading</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/form_head') ?>" class="nav-link <?= active_nav('form_head', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Contact Form Heading </p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/contactform') ?>" class="nav-link <?= active_nav('contactform', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>User Form </p>
							</a>
						</li>
						

						<li class="nav-item">
							<a href="<?php echo base_url('admin/address') ?>" class="nav-link <?= active_nav('address', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Address</p>
							</a>
						</li>
						
					</ul>
				</li>
					<li class="nav-item has-treeview <?= active_open('portfolio', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('portfolio', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Portfolio
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('admin/android') ?>" class="nav-link <?= active_nav('android', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Android</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/web_development') ?>" class="nav-link <?= active_nav('web_development', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Web Development</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/web_design') ?>" class="nav-link <?= active_nav('web_design', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Web Design</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/software') ?>" class="nav-link <?= active_nav('software', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Software Development</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/demo') ?>" class="nav-link <?= active_nav('demo', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Demo</p>
							</a>
						</li>
						
						
					</ul>
				</li>
					

				<li class="nav-item has-treeview <?= active_open('test_main_menu', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('test_main_menu', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Test Menu
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('Welcome/test_sub_menu_one') ?>" class="nav-link <?= active_nav('test_sub_menu_one', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>A 1 . 1</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Welcome/test_sub_menu_two') ?>" class="nav-link <?= active_nav('test_sub_menu_two', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>A 1 . 2</p>
							</a>
						</li>
						
					</ul>
				</li>
				


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
