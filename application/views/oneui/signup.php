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
        <div class="bg-primary-dark">
          <div class="row g-0 bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
              <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <a class="link-fx fw-semibold fs-2 text-white" href="index.html">
                    Petroleum Trading Co.
                  </a>
                </div>
              </div>
              <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                <p class="fw-medium text-white-50 mb-0">
                  <strong>Project v1.0</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <!-- <ul class="list list-inline mb-0 py-2">
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
                      Create Account
                    </h1>
                    <p class="fw-medium text-muted">
                      Get your access today in one easy step
                    </p>
                  </div>
                  <!-- END Header -->

                  <!-- Sign Up Form -->
                  <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                  <div class="row g-0 justify-content-center">
                    <div class="col-sm-8 col-xl-4">
                      <!-- <form class="js-validation-signup" action="signin.html" method="POST"> -->
                      <?php echo form_open('Signup',['class'=>'js-validation-signup','name'=>'userregistration','autocomplete'=>'off']);?>
                        <!--success message -->
                        <?php if($this->session->flashdata('success')){?>
                          <p style="color:green"><?php  echo $this->session->flashdata('success');?></p>	
                        <?php } ?>
                        <!--error message -->
                        <?php if($this->session->flashdata('error')){?>
                          <p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
                        <?php } ?>
                        <div class="mb-4">
                          <?php echo form_input(['name'=>'fullname','class'=>'form-control form-control-lg form-control-alt py-3','value'=>set_value('fullname'),'placeholder'=>'Full Name']);?>
                          <?php echo form_error('firstname',"<div style='color:red'>","</div>");?>
                          <!-- <input type="text" class="form-control form-control-lg form-control-alt py-3" id="signup-username" name="signup-username" placeholder="Username"> -->
                        </div>
                        <div class="mb-4">
                          <?php echo form_input(['name'=>'emailid','class'=>'form-control form-control-lg form-control-alt py-3','value'=>set_value('emailid'),'placeholder'=>'Email']);?>
                          <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>
                          <!-- <input type="email" class="form-control form-control-lg form-control-alt py-3" id="signup-email" name="signup-email" placeholder="Email"> -->
                        </div>
                        <div class="mb-4">
                          <?php echo form_password(['name'=>'password','class'=>'form-control form-control-lg form-control-alt py-3','value'=>set_value('password'),'placeholder'=>'Password']);?>
                          <?php echo form_error('password',"<div style='color:red'>","</div>");?>
                          <!-- <input type="password" class="form-control form-control-lg form-control-alt py-3" id="signup-password" name="signup-password" placeholder="Password"> -->
                        </div>
                        <div class="mb-4">
                          <?php echo form_password(['name'=>'confirmpassword','class'=>'form-control form-control-lg form-control-alt py-3','value'=>set_value('confirmpassword'),'placeholder'=>'Confirm Password']);?>
                          <?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>
                          <!-- <input type="password" class="form-control form-control-lg form-control-alt py-3" id="signup-password-confirm" name="signup-password-confirm" placeholder="Confirm Password"> -->
                        </div>
                        <div class="text-center">
                          <?php echo form_submit(['name'=>'insert','value'=>'Submit','class'=>'btn btn-lg btn-alt-success']);?>
                          <!-- <button type="submit" class="btn btn-lg btn-alt-success">
                            <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Sign Up
                          </button> -->
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- END Sign Up Form -->
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
    <script src="<?php echo base_url(); ?>backend/oneui/assets/js/pages/op_auth_signup.min.js"></script>
  </body>
</html>
