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
                        Suppliers
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="contactsDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url('contacts/all'); ?>">All</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('contacts/customers'); ?>">Customers</a></li>
                        <li><a class="dropdown-item active" href="<?php echo base_url('contacts/suppliers'); ?>">Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Archived</a></li>
                      </ul>
                    </div>
                    <a href="<?php echo base_url('contacts/newcustomer'); ?>" class="btn btn-primary btn-sm">
                      <i class="fa fa-plus opacity-50 me-1"></i> New Supplier
                    </a>
                  </div>
                  <!-- Regular links for larger screens -->
                  <div class="d-none d-md-flex flex-wrap gap-2">
                    <a href="<?php echo base_url('contacts/all'); ?>" class="btn btn-link text-dark" style="color: #000 !important; text-decoration: none;">All</a>
                    <a href="<?php echo base_url('contacts/customers'); ?>" class="btn btn-link text-dark" style="color: #000 !important; text-decoration: none;">Customers</a>
                    <a href="<?php echo base_url('contacts/suppliers'); ?>" class="btn btn-link active" style="color: #0d6efd !important; text-decoration: none;">Suppliers</a>
                    <a href="#" class="btn btn-link text-dark" style="color: #000 !important; text-decoration: none;">Archived</a>
                  </div>
                </div>
                <div class="d-none d-md-block mt-2 mt-md-0">
                  <a href="<?php echo base_url('contacts/newcustomer'); ?>" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus opacity-50 me-1"></i> New Supplier
                  </a>
                </div>
              </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- Page Content -->
        <div class="content">

          <!-- Your Block -->
        <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.oneTableToolsCheckable()) -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Suppliers</h3>
              <div class="block-options">
                <div class="block-options-item">
                  
                </div>
              </div>
            </div>
            <div class="block-content">
              <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
              <table class="js-table-checkable table table-hover table-vcenter">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 70px;">
                      <div class="form-check d-inline-block">
                        <input class="form-check-input" type="checkbox" value="" id="check-all" name="check-all">
                        <label class="form-check-label" for="check-all"></label>
                      </div>
                    </th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">
                      <div class="form-check d-inline-block">
                        <input class="form-check-input" type="checkbox" value="" id="row_1" name="row_1">
                        <label class="form-check-label" for="row_1"></label>
                      </div>
                    </td>
                    <td class="fs-sm">
                      <p class="fw-semibold mb-1">
                        <a href="be_pages_generic_profile.html">Lori Moore</a>
                      </p>
                      <p class="text-muted mb-0">
                        Customer details and further information
                      </p>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <em class="fs-sm text-muted">November 25, 2024 08:39</em>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="form-check d-inline-block">
                        <input class="form-check-input" type="checkbox" value="" id="row_2" name="row_2">
                        <label class="form-check-label" for="row_2"></label>
                      </div>
                    </td>
                    <td class="fs-sm">
                      <p class="fw-semibold mb-1">
                        <a href="be_pages_generic_profile.html">Wayne Garcia</a>
                      </p>
                      <p class="text-muted mb-0">
                        Customer details and further information
                      </p>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <em class="fs-sm text-muted">November 6, 2024 08:59</em>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Checkable Table -->
          <!-- END Your Block -->

        </div>
        <!-- END Page Content -->