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

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>backend/oneui/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>backend/oneui/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>backend/oneui/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>backend/oneui/assets/css/oneui.min.css">

    <!-- Load and set color theme + dark mode preference (blocking script to prevent flashing) -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/setTheme.js"></script>
  </head>

  <body>
    <!-- Page Container -->
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-primary">
          <div class="row g-0 bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
              <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <a class="link-fx fw-semibold fs-2 text-white" href="<?php echo site_url('signin'); ?>">
                    Petroleum Trading Co.
                  </a>
                  <p class="text-white-75 me-xl-8 mt-2">
                    Don’t worry, we’ve got your back. You’ll be soon back to your favorite dashboard!
                  </p>
                </div>
              </div>
              <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                <p class="fw-medium text-white-50 mb-0">
                  <strong>Project v1.0</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
              </div>
            </div>
            <!-- END Meta Info Section -->

            <!-- Main Section -->
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
              <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx fw-semibold fs-3 text-dark" href="<?php echo site_url('signin'); ?>">
                  Petroleum Trading Co.
                </a>
              </div>
              <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <!-- Header -->
                  <div class="text-center mb-5">
                    <p class="mb-3">
                      <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                    </p>
                    <h1 class="fw-bold mb-2">
                      Password Reminder
                    </h1>
                    <p class="fw-medium text-muted">
                      Please provide your account’s email or username and we will send you your password.
                    </p>
                  </div>
                  <!-- END Header -->

                  <!-- Reminder Form -->
                  <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.min.js which was auto compiled from _js/pages/op_auth_reminder.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                  <div class="row g-0 justify-content-center">
                    <!-- Display any flash messages (success/error) -->
                    <?php if ($this->session->flashdata('message')): ?>
                      <div><?php echo $this->session->flashdata('message'); ?></div>
                    <?php endif; ?>
                    <div class="col-sm-8 col-xl-4">
                      <form class="js-validation-reminder" action="#" method="POST">
                        <div class="mb-4">
                          <input type="text" class="form-control form-control-lg form-control-alt py-3" id="reminder-credential" name="reminder-credential" placeholder="Username or Email">
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-lg btn-alt-primary">
                            <i class="fa fa-fw fa-envelope me-1 opacity-50"></i> Send Mail
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- END Reminder Form -->
                </div>
              </div>
              <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                <p class="fw-medium text-black-50 py-2 mb-0">
                  <strong>Project v1.0</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
              </div>
            </div>
            <!-- END Main Section -->
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/oneui.app.min.js"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/pages/op_auth_reminder.min.js"></script>
  </body>
</html>
