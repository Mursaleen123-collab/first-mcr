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

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Student List</h1>
                    </div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Search</button>
                                        </div>
                                    </form>

                                </div>
                                <!--//col-->
                                <div class="col-auto">
                                    <select class="form-select w-auto">
                                        <option selected value="option-1">Degree Wise</option>
                                        <option value="option-2">BS IT</option>
                                        <option value="option-3">BS CS</option>
                                        <option value="option-4">BS SE</option>

                                    </select>
                                </div>
                                <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg>
                                        Download CSV
                                    </a>
                                </div>
                            </div>
                            <!--//row-->
                        </div>
                        <!--//table-utilities-->
                    </div>
                    <!--//col-auto-->
                </div>
                <!--//row-->


                <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
                </nav>


                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Roll No# <br> Degree <br> Semester</th>
                                                <th class="cell">Name</th>
                                                <th class="cell">Email</th>
                                                <th class="cell">Gender</th>
                                                <th class="cell">Cell No#</th>
                                                <th class="cell">Address</th>
                                                <th class="cell">City ,<br> State & <br> ZIP</th>
                                                <th class="cell">Status</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">bthunder418@gmail.com</td>
                                                <td class="cell">Male</td>
                                                <td class="cell">0335-4961946</td>
                                                <td class="cell">Khaqan Street arif colony gill road gujranwala</td>
                                                <td class="cell"><span>gujranwala</span><span class="note">Punjab</span><span class="note">52250</span></td>
                                                <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary  " href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">bthunder418@gmail.com</td>
                                                <td class="cell">Male</td>
                                                <td class="cell">0335-4961946</td>
                                                <td class="cell">Khaqan Street arif colony gill road gujranwala</td>
                                                <td class="cell"><span>gujranwala</span><span class="note">Punjab</span><span class="note">52250</span></td>
                                                <td class="cell"><span class="badge bg-warning">Due</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary  " href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">bthunder418@gmail.com</td>
                                                <td class="cell">Male</td>
                                                <td class="cell">0335-4961946</td>
                                                <td class="cell">Khaqan Street arif colony gill road gujranwala</td>
                                                <td class="cell"><span>gujranwala</span><span class="note">Punjab</span><span class="note">52250</span></td>
                                                <td class="cell"><span class="badge bg-danger">Blocked</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary  " href="#">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->

                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <!--//app-pagination-->

                    </div>
                    <!--//tab-pane-->

                    <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                        <div class="app-card app-card-orders-table mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Roll No# <br> Degree <br> Semester</th>
                                                <th class="cell">Name</th>
                                                <th class="cell">Email</th>
                                                <th class="cell">Gender</th>
                                                <th class="cell">Cell No#</th>
                                                <th class="cell">Address</th>
                                                <th class="cell">City ,<br> State & <br> ZIP</th>
                                                <th class="cell">Status</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">bthunder418@gmail.com</td>
                                                <td class="cell">Male</td>
                                                <td class="cell">0335-4961946</td>
                                                <td class="cell">Khaqan Street arif colony gill road gujranwala</td>
                                                <td class="cell"><span>gujranwala</span><span class="note">Punjab</span><span class="note">52250</span></td>
                                                <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary  " href="#">View</a></td>
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
                    <!--//tab-pane-->

                    <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                        <div class="app-card app-card-orders-table mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Roll No# <br> Degree <br> Semester</th>
                                                <th class="cell">Name</th>
                                                <th class="cell">Email</th>
                                                <th class="cell">Gender</th>
                                                <th class="cell">Cell No#</th>
                                                <th class="cell">Address</th>
                                                <th class="cell">City ,<br> State & <br> ZIP</th>
                                                <th class="cell">Status</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">bthunder418@gmail.com</td>
                                                <td class="cell">Male</td>
                                                <td class="cell">0335-4961946</td>
                                                <td class="cell">Khaqan Street arif colony gill road gujranwala</td>
                                                <td class="cell"><span>gujranwala</span><span class="note">Punjab</span><span class="note">52250</span></td>
                                                <td class="cell"><span class="badge bg-warning">Due</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary  " href="#">View</a></td>
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
                    <!--//tab-pane-->
                    <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
                        <div class="app-card app-card-orders-table mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Roll No# <br> Degree <br> Semester</th>
                                                <th class="cell">Name</th>
                                                <th class="cell">Email</th>
                                                <th class="cell">Gender</th>
                                                <th class="cell">Cell No#</th>
                                                <th class="cell">Address</th>
                                                <th class="cell">City ,<br> State & <br> ZIP</th>
                                                <th class="cell">Status</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
                                                <td class="cell">Mursaleen Umar</td>
                                                <td class="cell">bthunder418@gmail.com</td>
                                                <td class="cell">Male</td>
                                                <td class="cell">0335-4961946</td>
                                                <td class="cell">Khaqan Street arif colony gill road gujranwala</td>
                                                <td class="cell"><span>gujranwala</span><span class="note">Punjab</span><span class="note">52250</span></td>
                                                <td class="cell"><span class="badge bg-danger">Blocked</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary  " href="#">View</a></td>
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
                    <!--//tab-pane-->
                </div>
                <!--//tab-content-->



            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->


    </div>
    <!--//app-wrapper-->
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