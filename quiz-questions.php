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

                <h1 class="app-page-title">Add Questions</h1>

                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-1 p-lg-4">
                            <h3 class="mb-3">Welcome, Examiner!</h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <a class="btn app-btn-primary" href="view-all-questions.php">
                                        View All Questions
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
                    <div class="col-6 col-lg-3">
                        <a data-bs-toggle="modal" data-bs-target="#myModal" href="#">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">BS CS - 8th Semester</h4>
                                    <h4 class="stats-type mb-1">CMP-6567</h4>
                                    <div class="stats-figure">Web System & Technologies</div>
                                    <div class="stats-meta ">209 Questions</div>
                                </div>
                                <!--//app-card-body-->
                                <!-- <a class="app-card-link-mask" href="#"></a> -->
                            </div>
                        </a>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <div class="col-6 col-lg-3">
                        <a data-bs-toggle="modal" data-bs-target="#myModal" href="#">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">BS CS - 8th Semester</h4>
                                    <h4 class="stats-type mb-1">CMP-6567</h4>
                                    <div class="stats-figure">Web System & Technologies</div>
                                    <div class="stats-meta text-success">209 Questions</div>
                                </div>
                                <!--//app-card-body-->
                                <!-- <a class="app-card-link-mask" href="#"></a> -->
                            </div>
                        </a>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                        <a data-bs-toggle="modal" data-bs-target="#myModal" href="#">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">BS CS - 8th Semester</h4>
                                    <h4 class="stats-type mb-1">CMP-6567</h4>
                                    <div class="stats-figure">Web System & Technologies</div>
                                    <div class="stats-meta text-success">209 Questions</div>
                                </div>
                                <!--//app-card-body-->
                                <!-- <a class="app-card-link-mask" href="#"></a> -->
                            </div>
                        </a>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                        <a data-bs-toggle="modal" data-bs-target="#myModal" href="#">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">BS CS - 8th Semester</h4>
                                    <h4 class="stats-type mb-1">CMP-6567</h4>
                                    <div class="stats-figure">Web System & Technologies</div>
                                    <div class="stats-meta text-success">209 Questions</div>
                                </div>
                                <!--//app-card-body-->
                                <!-- <a class="app-card-link-mask" href="#"></a> -->
                            </div>
                        </a>
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
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Questions</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-2">
                                <label for="questionid" class="form-label">Q ID</label>
                                <input type="text" class="form-control" id="questionid" value="210" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="degreename" class="form-label">Degree Name</label>
                                <input type="text" class="form-control" id="degreename" value="BS CS" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="semesterno" class="form-label">Semester</label>
                                <input type="text" class="form-control" id="semesterno" value="8th" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="totalnoofquestions" class="form-label">Total Questions</label>
                                <input type="text" class="form-control" id="totalnoofquestions" value="210" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="subjectname" class="form-label">Subeject Name</label>
                                <input type="text" class="form-control" id="subjectname" value="Web System & Technologies" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="Subjectcode" class="form-label">Subject Code</label>
                                <input type="text" class="form-control" id="Subjectcode" value="CMP-6567" disabled>
                            </div>
                            <div class="col-md-12">
                                <label for="question" class="form-label">Question</label>
                                <input type="number" class="form-control" id="question">
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">A</span>
                                    <input type="text" class="form-control" placeholder="Answer 1" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">B</span>
                                    <input type="text" class="form-control" placeholder="Answer 2" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">C</span>
                                    <input type="text" class="form-control" placeholder="Answer 3" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">D</span>
                                    <input type="text" class="form-control" placeholder="Answer 4" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Right Answer</span>
                                    <input type="text" class="form-control" placeholder="A,B,C,D" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-2">
                                <input type="submit" class="form-control btn app-btn-secondary" id="submit" value="Add">
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