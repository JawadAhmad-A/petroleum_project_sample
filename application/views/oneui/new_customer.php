
        <!-- Page Content -->
        <div class="content">

          <!-- Your Block -->
          <!-- Horizontal -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">New Customer</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="col-lg-8 space-y-5">
                  <!-- Form Horizontal - Default Style -->
                  <form class="space-y-4" action="<?php echo base_url('contacts/newcustomer'); ?>" method="POST">
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="first_name">Primary Contact</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>">
                        <?php echo form_error('first_name', '<small class="text-danger">', '</small>'); ?>
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>">
                        <?php echo form_error('last_name', '<small class="text-danger">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="account_name">Company Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="account_name" name="account_name" value="<?php echo set_value('account_name'); ?>">
                        <?php echo form_error('account_name', '<small class="text-danger">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="email">Email Address</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="phone">Phone</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo set_value('phone'); ?>">
                        <?php echo form_error('phone', '<small class="text-danger">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="address">Address</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="address" name="address" value="<?php echo set_value('address'); ?>">
                          <?php echo form_error('address', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="account_number">Account Number</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="account_number" name="account_number" value="<?php echo set_value('account_number'); ?>">
                          <?php echo form_error('account_number', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <label class="col-sm-4 col-form-label" for="creditlimit">Credit Limit</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="creditlimit" name="creditlimit" value="<?php echo set_value('creditlimit'); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="openingbalance">Opening Balance</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="openingbalance" name="openingbalance" value="<?php echo set_value('openingbalance'); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="currency">Currency</label>
                        <div class="col-sm-8">
                          <select class="form-select" id="currency" name="currency">
                            <option value="">Select Currency</option>
                            <option value="AFN">AFN</option>
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="PKR">PKR</option>
                          </select>
                        </div>
                    </div> -->
                    <hr>
                    <div class="row">
                      <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary me-2">Save</button>
                        <a href="<?php echo base_url('contacts/customers'); ?>" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </form>
                  <!-- END Form Horizontal - Default Style -->
                </div>
              </div>
            </div>
          </div>
          <!-- END Horizontal -->
          <!-- END Your Block -->

        </div>
        <!-- END Page Content -->