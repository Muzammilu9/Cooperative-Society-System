<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->
<html lang="en">
  <?php include 'includes/head.php' ?>
  <body>
<div class="card col-md-7 p-4 mb-0 text-white" style="background-color: rgb(33, 165, 125);">
  <h1 align="center">Welcome to INEC Multipurpose Cooperative Venures, Sokoto</h1></div>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
            <div class="card col-md-7 p-4 mb-0 text-white" style="background-color: rgb(114, 143, 206);">
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-medium-emphasis">Sign In to your account</p>
                  <form id="loginform" method="POST">
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                      </svg></span>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Username">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                  </div>
                  <div class="row">
                  <div id="alert" class="col-12"></div>
                    <div class="col-6">
                      
                      <button class="btn btn-primary px-4" id="login_button" type="button">Login</button>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button">Forgot password?</button>
                    </div>
                  </div>

                  </form>
                                  </div>
              </div>
              <div class="card col-md-5 py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>Sign up</h2>
                    <p>Kindly register with us .</p>
                    <button class="b<button class="btn-lg btn-outline-light mt-3" style="background-color: rgba(0, 123, 255, 0.2); color: rgb(23, 13, 66); border: 2px solid rgba(0, 123, 255, 0.5);" type="button">Register Now!</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script>
    </script>
    <script>
      $('#login_button').on('click', function () {
        if ($('#username').val() =='' || $('#password').val() =='' ) {
          $('#alert').html('<div class="alert alert-danger">Username or Password is empty</div>')
        }else{
          $('#alert').html('Vqlid')
        }
      })
    </script>
  </body>
</html>
