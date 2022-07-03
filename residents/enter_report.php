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
                <h3 class="page-title"> Report crime </h3>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card card-body">

                        <?php
                        if(isset($_POST['submit'])){

                            $title = $_POST['title'];
                            $description = $_POST['description'];
                            $amount = $_POST['amount'];
                            $req_type = $_POST['req_type'];

                            $sql = "INSERT INTO patient_requests (staff_id, title, description, amount, req_type, date)
                            VALUES ('{$_SESSION['staff_id']}','{$title}', '{$description}', '{$amount}','{$req_type}',now())";

                            if ($conn->query($sql) === TRUE) {

                                echo "<h4 class='alert alert-success'>Your Request Was successfully Send</h4>";

                            }else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }

                        ?>

                        <form action="" method="post">
                            <div class="text-center">
                                <h1>Get Location</h1>
                                <button onclick="getLocation()" class="btn btn-success">Get Location</button>
                            </div>


                            <div class="form-group">
                                <label for="type">Type of report</label>
                                <select name="req_type" class="form-control" id="type">
                                    <option value="Emergency">Emergency</option>
                                    <option value="Against Persons">Against Persons</option>
                                    <option value="Property">Property</option>
                                    <option value="Society">Society</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description of Report</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
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