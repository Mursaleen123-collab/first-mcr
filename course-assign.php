<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

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
                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-1 p-lg-4">
                            <h3 class="mb-3">Want to Assign Course!</h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div> A Teacher cannot be assigned to more then <span class="badge bg-warning"> 5 Subjects </span></div>
                                    <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <a class="btn app-btn-primary" href="#">
                                        Generate Time Table
                                    </a>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!--//app-card-body-->

                    </div>
                    <!--//inner-->
                </div>
                <!--//app-card-->
                <div class="row g-4 mb-4">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="app-card app-card-chart h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Assign Course</h4>
                                    </div>
                                    <div class="col-auto text-end">
                                        <h4 class="app-card-title"><a class="btn btn-success text-white " href="#" data-bs-toggle="modal" data-bs-target="#assigncoursemodal">Assign</a></h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body p-2 p-lg-4">

                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Sr#</th>
                                                <th class="cell">Course</th>
                                                <th class="cell">Teacher Name</th>
                                                <th class="cell">Duration</th>
                                                <th class="cell">Time</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">8</td>
                                                <td class="cell">CMP-6765<br> Web System & Technologies</td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">60 minutes</td>
                                                <td class="cell">2:00 PM to 3:00 PM</td>
                                                <td class="cell"><a class="btn btn-info text-white  " href="#" data-bs-toggle="modal" data-bs-target="#assigncoursemodal">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td class="cell">8</td>
                                                <td class="cell">CMP-6765<br> Web System & Technologies</td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">60 minutes</td>
                                                <td class="cell">2:00 PM to 3:00 PM</td>
                                                <td class="cell"><a class="btn btn-info text-white  " href="#" data-bs-toggle="modal" data-bs-target="#assigncoursemodal">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td class="cell">8</td>
                                                <td class="cell">CMP-6765<br> Web System & Technologies</td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">60 minutes</td>
                                                <td class="cell">2:00 PM to 3:00 PM</td>
                                                <td class="cell"><a class="btn btn-info text-white  " href="#" data-bs-toggle="modal" data-bs-target="#assigncoursemodal">Edit</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                </div>
                <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
        <!-- The Modal -->
        <div class="modal fade" id="assigncoursemodal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Quiz</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="coursename" class="form-label">Course Name</label>
                                <select id="coursename" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>BS IT</option>
                                    <option>BS CS</option>
                                    <option>BS SE</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="teachername" class="form-label">Teacher Name</label>
                                <select id="teachername" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>BS IT</option>
                                    <option>BS CS</option>
                                    <option>BS SE</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" id="duration">
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-2">

                                <label for="" class="form-label">.</label>
                                <input type="submit" class="form-control btn btn-secondary text-white" id="submit" value="Add">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
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