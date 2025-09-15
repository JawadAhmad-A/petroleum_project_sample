
        <!-- Page Content -->
        <div class="content">

          <!-- Your Block -->
          <!-- Horizontal -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">New Supplier</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-4">
                  <p class="fs-sm text-muted">
                    &nbsp;
                  </p>
                </div>
                <div class="col-lg-8 space-y-5">
                  <!-- Form Horizontal - Default Style -->
                  <form class="space-y-4" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="firstname">Primary Contact</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="companyname">Company Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="companyname" name="companyname">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="email">Email Address</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="phone">Phone</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="phone" name="phone">
                      </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="address">Address</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="creditlimit">Credit Limit</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="creditlimit" name="creditlimit">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="openingbalance">Opening Balance</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="openingbalance" name="openingbalance">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="currency">Currency</label>
                        <div class="col-sm-8">
                          <select class="form-select" id="currency" name="currency">
                            <option value="0">Select Currency</option>
                            <option value="0">AFN</option>
                            <option value="0">USD</option>
                            <option value="0">EUR</option>
                            <option value="0">PKR</option>
                          </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-6">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                      <div class="col-6">
                        <button type="button" class="btn btn-primary">Cancel</button>
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