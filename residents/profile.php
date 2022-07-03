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
                <h3 class="page-title"> Profile </h3>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title bg-primary text-white text-center p-2">Profile</h4>
                            <table class="table table-bordered text-center">
                                <thead>
                                <tbody>
                                <tr></tr>
                                <tr>
                                    <th>Names</th>
                                    <td><?php echo $names ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $email ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td><?php echo $gender ?></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td><?php echo $address ?></td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td><?php echo $location ?></td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td><?php echo $date ?></td>
                                </tr>
                                </tbody>
                                </thead>

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