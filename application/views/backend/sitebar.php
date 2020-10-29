<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="<?php echo base_url('dashboard') ?>" class="brand-link" >
			
			<span class="brand-text font-weight-light">Manager</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?php echo base_url('') ?>assets/backend/dist/img/user.jpg" class="img-circle elevation-2"
						 alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block">Manager</a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
					data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
						 with font-awesome or any other icon font library -->
					<li class="nav-item has-treeview menu-open">
						<a href="<?php echo base_url('dashboard') ?>" class="nav-link active">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
								<!--								<i class="right fas fa-angle-left"></i>-->
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-edit"></i>
							<p>
								Forms
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?php echo base_url('general-form') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>General Elements</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('advanced-form') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Advanced Elements</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('editors-form') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Editors</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('validation-form') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Validation</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-table"></i>
							<p>
								Tables
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?php echo base_url('simple-table') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Simple Tables</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('DataTables-table') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>DataTables</p>
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