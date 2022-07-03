<?php include ("../includes/header.php");
include ("nav.php");
?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_sidebar.html -->
            <?php include "sidebar.php"?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Home </h3>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card text-dark p-2">
                        <div class="card-header bg-primary text-white text-center p-2 font-weight-bold">Create Talk</div>
                        <div  class="text-center font-weight-bolder text-dark p-2">
                            <a style="text-decoration: none; color: black" class="mr-4" href=""><i  style="color: green" class="mdi mdi-image-album"></i> image  </a>
                            <a style="text-decoration: none; color: black" href=""> <i style="color: red" class="mdi mdi-video"></i> video </a>
                        </div>
                        <?php
                        if(isset($_POST['send'])){

                            $message = $_POST['message'];

                            $sql = "INSERT INTO talks (names, message, date)
                            VALUES ('{$names}','{$message}',now())";

                            if ($conn->query($sql) === TRUE) {

                                echo "<h4 class='alert alert-success'> Successfully send</h4>";

                            }else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }
                        ?>
                        <form class="form" action="" method="post">
                            <div class="form-group border-dark">
                                <textarea name="message" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                            <button type="submit" name="send" class="btn btn-primary float-right">send</button>
                        </form>
                    </div>
                </div>
              <div class="col-md-6 grid-margin stretch-card">
                  <div class="card text-dark p-2">
                      <div  class="card-header bg-dark text-white text-center p-2 font-weight-bold">Residents Chats</div>
                      <?php
                      $sql = "SELECT * FROM talks ORDER BY talk_id DESC";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                              $talk_id = $row["talk_id"];
                              $names = $row["names"];
                              $message = $row["message"];
                              $reply = $row["reply"];
                              $date = $row["date"];

                              echo "
                                        <div class='card-footer mt-1'>
                                            <div class='text-break'>
                                             <small class=''>$date</small>
                                                  <h6><strong> $names : </strong> $message</h6>
                                              </div>
                                              <a class='float-right' href=''>comment</a>
                                        </div>";


                          }
                      }else{
                          echo "<h4 class='alert alert-danger'> No Chats available</h4>";
                      }
                      ?>
                  </div>
              </div>
            </div>
          </div>

          <footer class="footer">
            <div class="footer-inner-wraper">
               <p class="text-center text-dark font-weight-bold">Gweru City Crime Alert</p>
            </div>
          </footer>
          <!-- partial -->
        </div>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>