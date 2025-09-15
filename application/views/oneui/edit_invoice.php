
        <!-- Page Content -->
        <div class="content">

          <!-- Your Block -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Invoice #<?php echo $invoice->invoice_number; ?></h3>
            </div>
            <div class="block-content block-content-full">
              <div class="col-lg-12 space-y-5">
                <form class="space-y-4" action="<?php echo base_url('invoicing/edit/' . $invoice->id); ?>" method="POST">
                  <div class="row mb-4"> 
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="customer">To</label>
                        <div class="col-sm-8">
                          <select class="js-select2 form-select" name="customer_id" style="width: 100%;" data-placeholder="Choose one.." disabled>
                            <option></option>
                            <?php foreach ($customers as $customer): ?>
                              <option value="<?php echo $customer->customer_id; ?>" 
                                <?php echo $customer->customer_id == $invoice->customer_id ? 'selected' : ''; ?>>
                                  <?php echo $customer->account_name; ?>
                              </option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="invoice_date">Issue Date</label>
                        <div class="col-sm-8">
                          <input type="text" class="js-datepicker form-control" id="invoice_date" name="invoice_date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="due_date">Due Date</label>
                        <div class="col-sm-8">
                          <input type="text" class="js-datepicker form-control" id="due_date" name="due_date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="invoice_number">Invoice #</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="invoice_number" name="invoice_number">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="reference">Reference</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="reference" name="reference">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="currency">Currency</label>
                        <div class="col-sm-8">
                          <select class="form-select" id="currency" name="currency">
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-bordered" id="invoice_items">
                      <thead class="table-success">
                        <tr>
                          <th></th>
                          <th>Item</th>
                          <th>Description</th>
                          <th>Quantity</th>
                          <th>Unit Price</th>
                          <th>Amount</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="fa fa-grip-lines"></span></td>
                          <td>
                            <select class="js-select2 form-select" name="item_id[]" style="width: 100%;" data-placeholder="Choose one..">
                              <option></option>
                              <?php foreach($items as $item): ?>
                                <option value="<?php echo $item->item_id; ?>"><?php echo $item->item_name; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </td>
                          <td><input type="text" class="form-control" name="description[]"></td>
                          <td><input type="number" class="form-control quantity" name="quantity[]"></td>
                          <td><input type="number" class="form-control price" name="price[]"></td>
                          <td><input type="number" class="form-control amount" name="amount[]" readonly></td>
                          <td>
                          <button class="btn btn-sm remove-row"><i class="fa fa-trash-alt"></i></button>
                            <!-- <button type="button" class="btn btn-danger btn-sm remove-row">
                              <i class="fa fa-times"></i>
                            </button> -->
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="row">
                    <div class="col-12 mb-3">
                      <!-- <button type="button" class="btn btn-success" id="add_row">
                        <i class="fa fa-plus"></i> Add Row
                      </button> -->
                      <button type="button" class="btn btn-alt-primary mb-4" id="add_row">
                            <i class="fa fa-plus me-1"></i> Add Item
                      </button>
                    </div>
                  </div>

                  <div class="row justify-content-end">
                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Subtotal</label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="subtotal" name="subtotal" readonly>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Total</label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="total" name="total" readonly>
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>
                  <div class="row position-fixed bottom-0 end-0 w-100 bg-white py-3">
                    <div class="col-12 text-end pe-4">
                      <button type="submit" class="btn btn-primary me-2">Save Invoice</button>
                      <a href="<?php echo base_url('invoicing'); ?>" class="btn btn-danger">Cancel</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END Your Block -->

        </div>
        <!-- END Page Content -->


<div class="content">
    <div class="block block-rounded">
        <div class="block-content">
            <form action="<?php echo base_url('invoicing/edit/' . $invoice->id); ?>" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label class="form-label">Customer</label>
                            <select class="form-select" name="customer_id" disabled>
                                <?php foreach ($customers as $customer): ?>
                                    <option value="<?php echo $customer->customer_id; ?>" 
                                            <?php echo $customer->customer_id == $invoice->customer_id ? 'selected' : ''; ?>>
                                        <?php echo $customer->account_name; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status">
                                <option value="draft" <?php echo $invoice->status == 'draft' ? 'selected' : ''; ?>>Draft</option>
                                <option value="sent" <?php echo $invoice->status == 'sent' ? 'selected' : ''; ?>>Sent</option>
                                <option value="paid" <?php echo $invoice->status == 'paid' ? 'selected' : ''; ?>>Paid</option>
                                <option value="overdue" <?php echo $invoice->status == 'overdue' ? 'selected' : ''; ?>>Overdue</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="items-container">
                    <?php foreach ($items as $index => $item): ?>
                        <div class="row item-row">
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="form-label">Item</label>
                                    <select class="form-select" name="item_id[]">
                                        <?php foreach ($items as $item): ?>
                                            <option value="<?php echo $item->item_id; ?>" 
                                                    <?php echo $item->item_id == $item->item_id ? 'selected' : ''; ?>>
                                                <?php echo $item->item_name; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-4">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" class="form-control" name="quantity[]" 
                                           value="<?php echo $item->quantity; ?>" min="1">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-4">
                                    <label class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price[]" 
                                           value="<?php echo $item->price; ?>" step="0.01">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-4">
                                    <label class="form-label">&nbsp;</label>
                                    <button type="button" class="btn btn-danger d-block" onclick="removeItem(this)">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-alt-primary mb-4" onclick="addItem()">
                            <i class="fa fa-plus"></i> Add Item
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Save Changes
                        </button>
                        <a href="<?php echo base_url('invoicing/view/' . $invoice->id); ?>" class="btn btn-alt-secondary">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function addItem() {
    const container = document.querySelector('.items-container');
    const template = document.querySelector('.item-row').cloneNode(true);
    
    // Clear values
    template.querySelectorAll('input').forEach(input => input.value = '');
    template.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
    
    container.appendChild(template);
}

function removeItem(button) {
    const itemsCount = document.querySelectorAll('.item-row').length;
    if (itemsCount > 1) {
        button.closest('.item-row').remove();
    }
}
</script>