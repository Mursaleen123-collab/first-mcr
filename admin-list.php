<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Admin</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app">
    <?php include('navbar.php'); ?>

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="row g-4 mb-4 ">
                    <div class="col-11 col-lg-11 mx-auto">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body p-4">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Name</th>
                                                <th class="cell">Email</th>
                                                <th class="cell">Date of <br> Hiring</th>
                                                <th class="cell">Address</th>
                                                <th class="cell">Cell<br>No#</th>
                                                <th class="cell">Post & <br> Specialization</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">bthunder418@gmail.com</td>
                                                <td class="cell">22-5-2019</td>
                                                <td class="cell">Khaqan Street arif colony gill road gujranwala</td>
                                                <td class="cell">0335-4961946</td>
                                                <td class="cell"><span>Teacher</span><span class="note">Computer Science </span></td>
                                                <td class="cell">
                                                    <a class="btn-sm app-btn-secondary  " href="#">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->
                                <div class="text-end mt-2">
                                    <a href="add-user.php" class="">Go back</a>
                                </div>
                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card  -->
                    </div>
                    <!--//app-card-->
                </div>
                <!--//row-->
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
    </div>
    <!--//app-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>