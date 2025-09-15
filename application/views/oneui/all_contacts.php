        <!-- Header -->
        <div class="bg-white">
            <div class="content py-3">
              <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center">
                  <h1 class="fs-5 fw-semibold mb-2 mb-md-0 me-md-4 text-dark">Contacts</h1>
                  <!-- Dropdown for small screens -->
                  <div class="d-flex d-md-none mb-2 justify-content-between w-100">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="contactsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Customers
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="contactsDropdown">
                        <li><a class="dropdown-item active" href="<?php echo base_url('contacts/all'); ?>">All</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('contacts/customers'); ?>">Customers</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('contacts/suppliers'); ?>">Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Archived</a></li>
                      </ul>
                    </div>
                    <a href="<?php echo base_url('contacts/newcontact'); ?>" class="btn btn-primary btn-sm">
                      <i class="fa fa-plus opacity-50 me-1"></i> New Contact
                    </a>
                  </div>
                  <!-- Regular links for larger screens -->
                  <div class="d-none d-md-flex flex-wrap gap-2">
                    <a href="<?php echo base_url('contacts/all'); ?>" class="btn btn-link active" style="color: #0d6efd !important; text-decoration: none;">All</a>
                    <a href="<?php echo base_url('contacts/customers'); ?>" class="btn btn-link text-dark" style="color: #000 !important; text-decoration: none;">Customers</a>
                    <a href="<?php echo base_url('contacts/suppliers'); ?>" class="btn btn-link text-dark" style="color: #000 !important; text-decoration: none;">Suppliers</a>
                    <a href="#" class="btn btn-link text-dark" style="color: #000 !important; text-decoration: none;">Archived</a>
                  </div>
                </div>
                <div class="d-none d-md-block mt-2 mt-md-0">
                  <a href="<?php echo base_url('contacts/newcontact'); ?>" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus opacity-50 me-1"></i> New Contact
                  </a>
                </div>
              </div>
            </div>
        </div>
        <!-- END Header -->

        <!-- Horizontal Navigation - Hover Normal -->
        <div class="bg-body-extra-light p-3 push">
            <!-- Toggle Navigation -->
            <div class="d-lg-none">
              <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
              <button type="button" class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#horizontal-navigation-hover-normal" data-class="d-none">
                Menu - Hover Normal
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- END Toggle Navigation -->

            <!-- Navigation -->
            <div id="horizontal-navigation-hover-normal" class="d-none d-lg-block mt-2 mt-lg-0">
              <ul class="nav-main nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                  <a class="nav-main-link active" href="be_ui_navigation_horizontal.html">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name">Home</span>
                    <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span>
                  </a>
                </li>
                <li class="nav-main-heading">Manage</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-briefcase"></i>
                    <span class="nav-main-link-name">Products</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fab fa-html5"></i>
                        <span class="nav-main-link-name">HTML Templates</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                            <span class="nav-main-link-name">Description</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-chart-line"></i>
                            <span class="nav-main-link-name">Statistics</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-chart-area"></i>
                            <span class="nav-main-link-name">Sales</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">320</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon far fa-images"></i>
                            <span class="nav-main-link-name">Media</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">18</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon far fa-file-alt"></i>
                            <span class="nav-main-link-name">Files</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">32</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fab fa-wordpress"></i>
                        <span class="nav-main-link-name">WordPress Themes</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                            <span class="nav-main-link-name">Description</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-chart-line"></i>
                            <span class="nav-main-link-name">Statistics</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-chart-area"></i>
                            <span class="nav-main-link-name">Sales</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">680</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon far fa-images"></i>
                            <span class="nav-main-link-name">Media</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">15</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon far fa-file-alt"></i>
                            <span class="nav-main-link-name">Files</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">20</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fab fa-medapps"></i>
                        <span class="nav-main-link-name">Web Applications</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                            <span class="nav-main-link-name">Description</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-chart-line"></i>
                            <span class="nav-main-link-name">Statistics</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-chart-area"></i>
                            <span class="nav-main-link-name">Sales</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">158</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon far fa-images"></i>
                            <span class="nav-main-link-name">Media</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">65</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon far fa-file-alt"></i>
                            <span class="nav-main-link-name">Files</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">78</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fab fa-youtube"></i>
                        <span class="nav-main-link-name">Video Templates</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                            <span class="nav-main-link-name">Description</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-chart-line"></i>
                            <span class="nav-main-link-name">Statistics</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-chart-area"></i>
                            <span class="nav-main-link-name">Sales</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">920</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon far fa-images"></i>
                            <span class="nav-main-link-name">Media</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">7</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <i class="nav-main-link-icon far fa-file-alt"></i>
                            <span class="nav-main-link-name">Files</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">19</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <i class="nav-main-link-icon fa fa-plus"></i>
                        <span class="nav-main-link-name">Add Product</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-money-bill-wave"></i>
                    <span class="nav-main-link-name">Payments</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Scheduled</span>
                        <span class="nav-main-link-badge badge rounded-pill bg-success">3</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Recurring</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Manage</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <i class="nav-main-link-icon fa fa-plus"></i>
                        <span class="nav-main-link-name">New Payment</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-globe-americas"></i>
                    <span class="nav-main-link-name">Services</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Hosting</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Web Design</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Web Development</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Graphic Design</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Legal</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Consulting</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading">Personal</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon far fa-user"></i>
                    <span class="nav-main-link-name">Profile</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Edit</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Settings</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Log out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Navigation -->
          </div>
          <!-- END Horizontal Navigation - Hover Normal -->

        <!-- Page Content -->
        <div class="content">
          <!-- Your Block -->

          <!-- END Your Block -->

        </div>
        <!-- END Page Content -->