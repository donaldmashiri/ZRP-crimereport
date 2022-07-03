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
    <link rel="shortcut icon" href="assets/images/favicon.png" />
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
                  <h6 class="font-weight-light text-warning font-weight-bold">Create Account</h6>

                  <?php
                  if(isset($_POST['register'])){

                      $names = $_POST['names'];
                      $email = $_POST['email'];
                      $gender = $_POST['gender'];
                      $address = $_POST['address'];
                      $location = $_POST['location'];
                      $password = $_POST['password'];
                      $con_password = $_POST['con_password'];

                      if($password === $con_password){
                          $sql = "INSERT INTO residents (names, email, gender, address, location, password, date)
                            VALUES ('{$names}','{$email}', '{$gender}', '{$address}','{$location}',
                                    '{$password}',now())";

                          if ($conn->query($sql) === TRUE) {

                              echo "<h4 class='alert alert-success'>Your Account Was successfully created</h4>";

                          }else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                      }else{
                          echo "<h4 class='alert alert-danger'>Password did not match</h4>";
                      }
                  }
                  ?>

                <form action="" method="post" class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="names" id="names" placeholder="Full names">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" name="gender" id="gender">
                      <option>Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="other">other</option>
                    </select>
                  </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="address" id="address" placeholder="House Address">
                    </div>
                    <div class="form-group">
                    <select class="form-control form-control-lg" name="location" id="location">
                      <option>Location</option>
                      <option value="Mkoba North">Mkoba North</option>
                      <option value="Mkoba South">Mkoba South</option>
                      <option value="Senga">Senga</option>
                      <option value="Mambo">Mambo</option>
                      <option value="CBD">CBD</option>
                      <option value="Ascot">Ascot</option>
                      <option value="Nehosho">Nehosho</option>
                      <option value="Kopje">Kopje</option>
                      <option value="South downs">South downs</option>
                      <option value="Athlone">Athlone</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                  </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="con_password" id="con_password" placeholder="Confirm Password">
                    </div>
                  <div class="mt-3">
                    <button type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="index.php" class="text-primary">Login</a>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>