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
