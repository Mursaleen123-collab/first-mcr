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

                <h1 class="app-page-title">All Questions</h1>


                <div class="row g-4 mb-4">
                    <div class="col-12 col-lg-6">
                        <div class="app-card app-card-chart h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">List of Subjects</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">

                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Sr#</th>
                                                <th class="cell">Course Code</th>
                                                <th class="cell">Course Name</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">1</td>
                                                <td class="cell">CMP-6567</td>
                                                <td class="cell">Web System & Technologies</td>
                                                <td class="cell">
                                                    <a class="btn btn-sm app-btn-secondary  " href="#">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cell">2</td>
                                                <td class="cell">EMP-1240</td>
                                                <td class="cell">Enteripse Resource Planning</td>
                                                <td class="cell">
                                                    <a class="btn btn-sm app-btn-secondary  " href="#">View</a>
                                                </td>
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
                    <div class="col-12 col-lg-6">
                        <div class="app-card app-card-chart h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Emp-1240</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body p-2 p-lg-4">

                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <tbody>
                                            <tr>
                                                <td class="cell">1</td>
                                                <td class="cell">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, recusandae vitae cum voluptatum exercitationem quidem commodi reiciendis corrupti culpa cumque corporis veniam accusantium, numquam praesentium consectetur ipsam tempore doloribus magnam</td>
                                                <td class="cell">
                                                    <a class="btn app-btn-primary w-30 theme-btn" data-bs-toggle="modal" data-bs-target="#myModal" href="#">Edit</a>
                                                    <a class="btn btn-danger text-white w-30 mt-1" href="#">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cell">2</td>
                                                <td class="cell">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni deserunt harum est incidunt esse vero sint, quam ex numquam dignissimos neque, aperiam aut ipsam necessitatibus! Laudantium veritatis necessitatibus quaerat dolorum.</td>
                                                <td class="cell">
                                                    <a class="btn app-btn-primary w-30 theme-btn" data-bs-toggle="modal" data-bs-target="#myModal" href="#">Edit</a>
                                                    <a class="btn btn-danger text-white w-30 mt-1" href="#">Delete</a>
                                                </td>
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
                                <input type="text" class="form-control" id="question" value="Choose the default file extension of PHP among the following.">
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">A</span>
                                    <input type="text" class="form-control" placeholder="Answer 1" value=".xml" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">B</span>
                                    <input type="text" class="form-control" placeholder="Answer 2" value=".html" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">C</span>
                                    <input type="text" class="form-control" placeholder="Answer 3" value=".json" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">D</span>
                                    <input type="text" class="form-control" placeholder="Answer 4" value=".php" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Right Answer</span>
                                    <input type="text" class="form-control" placeholder="A,B,C,D" value="D" aria-label="Username" aria-describedby="addon-wrapping">
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