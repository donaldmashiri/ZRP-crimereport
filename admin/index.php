<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gweru City Crime Alert</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../img/zrp.jpg" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-center p-5">
                  <h1 class="font-weight-bold text-warning">Administration</h1>
                <div class="brand-logo">
                  <img src="../img/zrp.jpg" class="rounded">
                </div>
                  <h4 class="text-dark font-weight-bold">Gweru City Crime Alert</h4>
                  <?php
                  if(isset($_POST['login'])){
                      $passcode = $_POST['passcode'];

                      if ($passcode === "12345") {
                          $_SESSION['passcode'] = "12345";
                          echo $_SESSION['passcode'];
                          header('location: home.php');
                      } else {
                          echo "<p class='alert alert-danger font-weight-bolder'>Incorrect Passcode</p>";
                      }
                  }
                  ?>
                <form method="post" action="" class="pt-3">
                  <div class="form-group">
                    <input type="password" name="passcode" class="form-control form-control-lg"  placeholder="Passcode">
                  </div>
                  <div class="mt-3">
                    <button name="login" type="submit" class="btn btn-block text-dark btn-warning btn-lg font-weight-medium auth-form-btn" >Log in</button>
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

    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>

    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>