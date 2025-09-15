<!doctype html>
<html lang="en" class="remember-theme">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Petroleum Trading Co.</title>

    <meta name="description" content="Petroleum Trading Company MIS created by ByteEdge Solutions">
    <meta name="author" content="ByteEdge Solutions">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Petroleum Trading Co - Admin Dashboard">
    <meta property="og:site_name" content="petroleum_project_sampleNoor">
    <meta property="og:description" content="Petroleum Trading Company MIS created by ByteEdge Solutions">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>backend/oneui/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>backend/oneui/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>backend/oneui/assets/media/favicons/apple-touch-icon-180x180.png">

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/dropzone/min/dropzone.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>backend/oneui/assets/css/oneui.min.css">

    <!-- Load and set color theme + dark mode preference (blocking script to prevent flashing) -->
    <!-- <script src="backend/oneui/assets/js/setTheme.js"></script> -->
  </head>

  <body>
    <!-- Page Container -->
    <div id="page-container" class="page-header-light main-content-boxed">

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="<?php echo site_url('dashboard'); ?>">
              Petroleum Trading Co.
            </a>
            <!-- END Logo -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block me-2">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
                <span class="text-primary">•</span>
              </button>
              <div class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                  <h5 class="dropdown-header text-uppercase">Notifications</h5>
                </div>
                <ul class="nav-items mb-0">
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">15 min ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="p-2 border-top text-center">
                  <a class="d-inline-block fw-medium" href="javascript:void(0)">
                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                  </a>
                </div>
              </div>
            </div>
            <!-- END Notifications Dropdown -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
            <!-- Open Search Section (visible on smaller screens) -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
              <i class="si si-magnifier"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Search Form (visible on larger screens) -->
            <form class="d-none d-sm-inline-block" method="POST">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                <span class="input-group-text bg-body border-0">
                  <i class="si si-magnifier"></i>
                </span>
              </div>
            </form>
            <!-- END Search Form -->

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="<?php echo base_url(); ?>backend/oneui/assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
                <span class="d-none d-sm-inline-block ms-1"><?php echo $fname?></span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?php echo base_url(); ?>backend/oneui/assets/media/avatars/avatar10.jpg" alt="">
                  <p class="mt-2 mb-0 fw-medium"><?php echo $fullname?></p>
                  <p class="mb-0 text-muted fs-sm fw-medium"><?php echo $role?></p>
                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                    <span class="fs-sm fw-medium">Inbox</span>
                    <span class="badge rounded-pill bg-primary ms-2">3</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo site_url('profile'); ?>">
                    <span class="fs-sm fw-medium">Profile</span>
                    <span class="badge rounded-pill bg-primary ms-2">1</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span class="fs-sm fw-medium">Settings</span>
                  </a>
                </div>
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo site_url('Logout');?>">
                    <span class="fs-sm fw-medium">Log Out</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" method="POST">
              <div class="input-group input-group-sm">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->
         
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Navigation -->
        <div class="bg-primary">
          <div class="content py-3">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none">
              <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
              <button type="button" class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
              <ul class="nav-main nav-main-light nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                  <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'dashboard') ? 'active' : ''; ?>" href="<?php echo site_url('dashboard'); ?>">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name text-light fw-bold">Dashboard</span>
                  </a>
                </li>
                <li class="nav-main-heading">Heading</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-puzzle"></i>
                    <span class="nav-main-link-name text-light fw-bold">Business</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'invoicing') ? 'active' : ''; ?>" href="<?php echo site_url('invoicing'); ?>">
                        <span class="nav-main-link-name">Invoices</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'quotes') ? 'active' : ''; ?>" href="<?php echo site_url('invoicing/previewinvoice'); ?>">
                        <span class="nav-main-link-name">Quotes</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'salesoverview') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Sales Overview</span>
                      </a>
                    </li>
                    <hr>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'billstopay') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Bills to Pay</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'purchaseorders') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Purchase Orders</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'purchaseoverview') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Purchase Overview</span>
                      </a>
                    </li>
                    <hr>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'expenseclaims') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Expense Claims</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'products') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Products and Services</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'payroll') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Payroll</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-puzzle"></i>
                    <span class="nav-main-link-name text-light fw-bold">Accounting</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'bankaccounts') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Bank Accounts</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'reports') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Reports</span>
                      </a>
                    </li>
                    <hr>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'profitloss') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Profit and Loss</span>
                      </a>
                    </li>
                    <hr>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'chartofaccounts') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Chart of Accounts</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'fixedassets') ? 'active' : ''; ?>" href="javascript:void(0)">
                        <span class="nav-main-link-name">Fixed Assets</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-puzzle"></i>
                    <span class="nav-main-link-name text-light fw-bold">Contacts</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'contacts/all') ? 'active' : ''; ?>" href="<?php echo site_url('contacts/all'); ?>">
                        <span class="nav-main-link-name">All Contacts</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'contacts/customers') ? 'active' : ''; ?>" href="<?php echo site_url('contacts/customers'); ?>">
                        <span class="nav-main-link-name">Customers</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link <?php echo ($this->uri->segment(1) == 'contacts/suppliers') ? 'active' : ''; ?>" href="<?php echo site_url('contacts/suppliers'); ?>">
                        <span class="nav-main-link-name">Suppliers</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- <li class="nav-main-heading">Extra</li>
                <li class="nav-main-item ms-lg-auto">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-brush"></i>
                    <span class="nav-main-link-name d-lg-none">Themes</span>
                  </a>
                  <ul class="nav-main-submenu nav-main-submenu-right">
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                        <i class="nav-main-link-icon fa fa-square text-default"></i>
                        <span class="nav-main-link-name">Default</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                        <span class="nav-main-link-name">Amethyst</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-city"></i>
                        <span class="nav-main-link-name">City</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-flat"></i>
                        <span class="nav-main-link-name">Flat</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-modern"></i>
                        <span class="nav-main-link-name">Modern</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                        <span class="nav-main-link-name">Smooth</span>
                      </a>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </div>
            <!-- END Main Navigation -->
          </div>
        </div>
        <!-- END Navigation -->
