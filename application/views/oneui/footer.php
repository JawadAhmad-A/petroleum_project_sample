      </main>
      <!-- END Main Container -->
       
    </div>
    <!-- END Page Container -->

    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/oneui.app.min.js"></script>
    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/chart.js/chart.umd.js"></script>

    <!-- Page JS Code -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/pages/be_pages_dashboard.min.js"></script>
    <!-- Page JS Helpers (Table Tools helpers) -->
    <script>One.helpersOnLoad(['one-table-tools-checkable', 'one-table-tools-sections', 'js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs', 'jq-rangeslider']);</script>

    <script>
      $(document).ready(function() {
          console.log('Form script loaded');

          $('#invoice_form').on('submit', function(e) {
              e.preventDefault();
              console.log('Form submitted');
              
              var formData = $(this).serializeArray();
              console.log('Form data:', formData);
              
              var valid = true;
              if (!$('#customer_id').val()) {
                  alert('Please select a customer');
                  valid = false;
              }

              if ($('#invoice_items tbody tr').length < 1) {
                  alert('Please add at least one item');
                  valid = false;
              }

              if (valid) {
                  console.log('Form validation passed, submitting...');
                  this.submit();
              }
          });
          });
    </script>
    <!-- Invoice Form Validation -->
    <script>
        $(document).ready(function() {
          $('#add_row').click(function() {
            var newRow = $('#invoice_items tbody tr:first').clone();
            newRow.find('input').val('');
            newRow.find('select').val('');
            $('#invoice_items tbody').append(newRow);
          });

          $(document).on('click', '.remove-row', function() {
            if ($('#invoice_items tbody tr').length > 1) {
              $(this).closest('tr').remove();
              calculateTotals();
            }
          });

          $(document).on('input', '.quantity, .price', function() {
            var row = $(this).closest('tr');
            var quantity = parseFloat(row.find('.quantity').val()) || 0;
            var price = parseFloat(row.find('.price').val()) || 0;
            var amount = quantity * price;
            row.find('.amount').val(amount.toFixed(2));
            calculateTotals();
          });

          function calculateTotals() {
            var subtotal = 0;
            $('.amount').each(function() {
              subtotal += parseFloat($(this).val()) || 0;
            });
            $('#subtotal').val(subtotal.toFixed(2));
            $('#total').val(subtotal.toFixed(2));
          }

          $('#invoice_form').on('submit', function(e) {
              e.preventDefault();
              
              var valid = true;
              if (!$('#customer_id').val()) {
                  alert('Please select a customer');
                  valid = false;
              }

              if ($('#invoice_items tbody tr').length < 1) {
                  alert('Please add at least one item');
                  valid = false;
              }

              if (valid) {
                  this.submit();
              }
            });
        });
      </script>
  </body>
</html>