<div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title">
              <!-- <i class="fa fa-paw"></i> -->
              <img src="<?= base_url() ?>/public/images/g-logo-full.png" width="190" class="hidden-small">
              <img src="<?= base_url() ?>/public/images/g-logo.png" width="50" class="logo-sm">
              <!-- <span>G-MONS</span> -->
            </a>
            <!-- Gerai Monitoring System -->
          </div>
          <div class="clearfix"></div>
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?= base_url() ?>public/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <h2>John Doe</h2>
              <span>Chief Executive</span>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />
          <div class="location">
            <span class="site mb-3"><i class="fa fa-institution"></i>BOOTH CIPAYUNG RAYA</span>
            <!-- <button type="button" class="btn btn-block btn-success btn-sm mt-2">Pick Gerai</button> -->
          </div>
          <!-- <div id="sidebar-menu" class="main_menu_side hidden-print main_menu location-button-sm">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home primary-green"></i> PICK LOCATION </a>
                </li>
              </ul>
            </div>
          </div> -->
          <img src="<?= base_url() ?>public/images/horizontal-line.png" class="navbar-hz-line hidden-small" alt="" srcset="">
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu location-button-sm">
                <li><a><i class="fa fa-institution"></i> PICK BOOTH</a>
                </li>
              </ul>
              <h3 class="text-info">MAIN MENU</h3>
              <ul class="nav side-menu">
                <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                <li><a href="<?= base_url('monitoring') ?>"><i class="fa fa-desktop"></i>Power Monitoring</a>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Power Trip<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('power-trip') ?>">Daily</a></li>
										<li><a href="<?= base_url('power-trip/weekly') ?>">Weekly</a></li>
										<li><a href="<?= base_url('power-trip/monthly') ?>">Monthly</a></li>
									</ul>
                </li>
                <li><a><i class="fa fa-money"></i>Cost Graph<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('cost') ?>">Daily</a></li>
										<li><a href="<?= base_url('cost/weekly') ?>">Weekly</a></li>
										<li><a href="<?= base_url('cost/monthly') ?>">Monthly</a></li>
									</ul>
                </li>
                <li><a><i class="fa fa-book"></i>Report<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('coming-soon') ?>">Cost Usage</a></li>
										<li><a href="<?= base_url('coming-soon') ?>">Power Trip</a></li>
									</ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3 class="text-info">Configuration</h3>
              <ul class="nav side-menu">
                <!-- <li><a><i class="fa fa-briefcase"></i> Level View <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('coming-soon') ?>">Center Office</a></li>
										<li><a href="<?= base_url('coming-soon') ?>">Branch Office</a></li>
										<li><a href="<?= base_url('coming-soon') ?>">Booth Office</a></li>
									</ul>
								</li> -->
								<li><a><i class="fa fa-bug"></i> Booth & Area <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('coming-soon') ?>">Settings</a></li>
										<li><a href="<?= base_url('coming-soon') ?>">Master</a></li>
										<li><a href="form_advanced.html">Area</a></li>
									</ul>
								</li>
                <li><a><i class="fa fa-cog"></i> Responsibility <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('coming-soon') ?>">Access</a></li>
										<li><a href="<?= base_url('coming-soon') ?>">Position</a></li>
									</ul>
								</li>
              </ul>
            </div>
            <div class="menu_section">
              <h3 class="text-info">Settings</h3>
              <ul class="nav side-menu">
                <li><a href="javascript:void(0)"><i class="fa fa-key"></i> Change Password</a></li>
                <!-- <li><a href="javascript:void(0)"><i class="fa fa-user"></i> My Profile</a></li> -->
                <li><a href="<?= base_url() ?>users/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->
        </div>
      </div>