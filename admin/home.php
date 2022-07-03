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
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> All Residents</h4>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> Res# </th>
                                    <th> Full Names </th>
                                    <th> Email </th>
                                    <th> Gender </th>
                                    <th> Address </th>
                                    <th> Location </th>
                                    <th> Date created </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM residents ORDER BY res_id DESC";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $res_id = $row["res_id"];
                                        $names = $row["names"];
                                        $email = $row["email"];
                                        $gender = $row["gender"];
                                        $address = $row["address"];
                                        $date = $row["date"];
                                        $location = $row["location"];
                                ?>
                                <tr>
                                    <td class="py-1">
                                        <img src="../img/user.png" width="70" height="70" alt="image">
                                        00<?php echo $res_id; ?>
                                    </td>
                                    <td> <?php echo $names; ?> </td>
                                    <td>
                                        <?php echo $email; ?>
                                    </td>
                                    <td> <?php echo $gender; ?> </td>
                                    <td> <?php echo $address; ?> </td>
                                    <td> <?php echo $location; ?> </td>
                                    <td> <?php echo $date; ?> </td>
                                </tr>
                                <?php
                                } }else{
                                    echo "<h1 class='alert alert-info'>No Users available</h1>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
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