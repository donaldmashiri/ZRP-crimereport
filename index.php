<?php include ("includes/db.php")?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gweru City Crime Alert</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="img/zrp.jpg" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-center p-5">
                <div class="brand-logo">
                  <img src="img/zrp.jpg" class="rounded">
                </div>
                  <h4 class="text-dark font-weight-bold">Gweru City Crime Alert</h4>
                <h6 class="font-weight-light">Residents</h6>
                  <?php
                  if(isset($_POST['login'])){
                      $email = $_POST['email'];
                      $password = $_POST['password'];

                      $query = "select * from residents where email = '$email' and password = '$password'";
                      $result = mysqli_query($conn, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                      $count = mysqli_num_rows($result);

                      if ($count == 1) {
                          $_SESSION['res_id'] = $row['res_id'];
                          header('location: residents/index.php');
                      } else {
                          echo "<p class='alert alert-danger'>Incorrect Password</p>";
                      }
                  }
                  ?>
                <form action="" method="post" class="pt-3">
                  <div class="form-group">
                    <input type="email" name="email"  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                  </div>

                    <div class="form-check bg-warning">
                        <hr>
                    </div>

                  <div class="mb-2">
                    <a href="admin" target="_blank" type="button" class="btn btn-block text-warning btn-facebook auth-form-btn">
                      <i class="mdi mdi-priority-high mr-2"></i>ZRP Portal </a>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>