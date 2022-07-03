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
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card card-body">
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Crime Report</h6>
                            <a class="btn btn-primary justify-content-end" href="enter_report.php">Add New</a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Crime reported</h4>
                            <table class="table table-bordered">
                                <thead class="text-white" style="background: darkblue">
                                <tr>
                                    <th> # </th>
                                    <th> rate </th>
                                    <th> Type of Crime </th>
                                    <th> Description </th>
                                    <th> location </th>
                                    <th> latitude </th>
                                    <th> longitude </th>
                                    <th> date </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> Crime </td>
                                    <td>
                                        <div class="text-wrap" > What is an example of a crime?
                                        Crime can involve violence, sex or drugs but also discrimination, road rage, undeclared work and burglary. Crime is any behaviour and any act, activity or event that is punishable by law. </div></td>
                                    <td> Gweru, Senga </td>
                                    <td> 38.8951 </td>
                                    <td> -77.0364  </td>
                                    <td> May 15, 2015 </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> Rape Case </td>
                                    <td>
                                        <div class="text-wrap" >Sexual conduct becomes criminal when sexual touch is not consented to, either because the offender forces another person to be sexual against his or her will. </div></td>
                                    <td> Gweru, Kopje </td>
                                    <td> 8.8951 </td>
                                    <td> -7.0364  </td>
                                    <td> September 10, 2021 </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> Property </td>
                                    <td>
                                        <div class="text-wrap" >Property crime is a category of crime, usually involving private property, that includes, among other crimes, burglary, larceny, theft, motor vehicle theft, arson, shoplifting, and vandalism. Property crime is a crime to obtain money, property, or some other benefit. </div></td>
                                    <td> Gweru, Kopje </td>
                                    <td> 12.8951 </td>
                                    <td> -41.0364  </td>
                                    <td> April 05, 2022 </td>
                                </tr>
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