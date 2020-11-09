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
							<a href="<?php echo base_url('Admin/list_slider') ?>" class="nav-link <?= active_nav('slider_list', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Slider</p>
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
							<a href="<?php echo base_url('Admin/footer') ?>" class="nav-link <?= active_nav('footer', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Footer Copyright </p>
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
				<li class="nav-item has-treeview <?= active_open('eservice', $main_nav); ?>">
					<a href="#" class="nav-link <?= active_nav('eservice', $main_nav); ?>">
						<i class="nav-icon fas fa-edit"></i>
						<p>
						Software  Service
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('admin/eservice_box') ?>" class="nav-link <?= active_nav('eservice', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Service Box</p>
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
							<a href="<?php echo base_url('admin/dservice_box') ?>" class="nav-link <?= active_nav('dservice', $sub_nav); ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Service </p>
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
