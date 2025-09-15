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
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
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
        <div class="bg-image" style="background-image: url('<?php echo base_url(); ?>backend/oneui/assets/media/photos/photo28@2x.jpg');">
          <div class="row g-0 bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
              <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <a class="link-fx fw-semibold fs-2 text-white" href="index.html">
                    Petroleum Trading Co.
                  </a>
                  <p class="text-white-75 me-xl-8 mt-2">
                    Welcome to your amazing app. Feel free to login and start managing your Invoices and clients.
                  </p>
                </div>
              </div>
              <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                <p class="fw-medium text-white-50 mb-0">
                  <strong>Project v1.0</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
<!--                 <ul class="list list-inline mb-0 py-2">
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Terms</a>
                  </li>
                </ul> -->
              </div>
            </div>
            <!-- END Meta Info Section -->

            <!-- Main Section -->
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
              <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx fw-semibold fs-3 text-dark" href="index.html">
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
                      Sign In
                    </h1>
                    <p class="fw-medium text-muted">
                      Welcome, please login! <!--  or <a href="op_auth_signup3.html">sign up</a> for a new account. -->
                    </p>
                  </div>
                  <!-- END Header -->

                  <!-- Sign In Form -->
                  <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                  <div class="row g-0 justify-content-center">
                    <div class="col-sm-8 col-xl-4">
                      <?php echo form_open('Signin',['class'=>'js-validation-signin','name'=>'userregistration','autocomplete'=>'off']);?>
                      <!-- <form class="js-validation-signin" action="dashboard.html" method="POST"> -->
                        <!--error message -->
                        <?php if($this->session->flashdata('error')){?>
                          <p style="color:red"><?php  echo $this->session->flashdata('error');?></p>
                        <?php } ?>
                        <div class="mb-4">
                          <?php echo form_input(['name'=>'emailid','class'=>'form-control form-control-lg form-control-alt py-3','value'=>set_value('emailid'),'placeholder'=>'Username']);?>
                          <?php echo form_error('emailid',"<div style='color:red'>","</div>");?> 
                          <!-- <input type="text" class="form-control form-control-lg form-control-alt py-3" id="login-username" name="login-username" placeholder="Username"> -->
                        </div>
                        <div class="mb-4">
                          <?php echo form_password(['name'=>'password','class'=>'form-control form-control-lg form-control-alt py-3','value'=>set_value('password'),'placeholder'=>'Password']);?>
                          <?php echo form_error('password',"<div style='color:red'>","</div>");?>
                          <!-- <input type="password" class="form-control form-control-lg form-control-alt py-3" id="login-password" name="login-password" placeholder="Password"> -->
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                          <div>
                            <a class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1" href="<?php echo site_url('forgotpassword'); ?>">
                              Forgot Password?
                            </a>
                          </div>
                          <div>
                            <?php echo form_submit(['name'=>'insert','value'=>'Login','class'=>'btn btn-primary btn-user btn-block']);?>
                            <!-- <button type="submit" class="btn btn-lg btn-alt-primary">
                              <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                            </button> -->
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- END Sign In Form -->
                </div>
              </div>
              <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                <p class="fw-medium text-black-50 py-2 mb-0">
                  <strong>Project v1.0</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <!-- <ul class="list list-inline py-2 mb-0">
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                  </li>
                </ul> -->
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

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/oneui.app.min.js"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/pages/op_auth_signin.min.js"></script>
  </body>
</html>
