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
                <h3 class="page-title"> Notifications </h3>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title bg-primary text-white text-center p-2">Notifications</h4>
                            <ol class="list-group text text-dark list-group-numbered">
                                <?php
                                $sql = "SELECT * FROM notices";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $noti_id = $row["noti_id"];
                                        $notice = $row["notice"];
                                        $date = $row["date"];
                                        echo "<li class='list-group-item'>(ZRP00$noti_id) : $notice
                                                <small style='color: yellowgreen'>$date</small></li>";
                                    }
                                }
                                ?>




                            </ol>
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