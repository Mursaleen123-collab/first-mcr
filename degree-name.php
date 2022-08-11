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

				<h1 class="app-page-title">Course Offered</h1>


				<div class="row g-4 mb-4">
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<!--//app-card-header-->
							<div class="app-card-body p-3 p-lg-4">
								<div class="table-responsive">
									<table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Sr#</th>
												<th class="cell">Degree Name</th>
												<th class="cell">Years</th>
												<th class="cell">Term</th>
												<th class="cell">Credit Hours</th>

												<th class="cell"></th>
											</tr>
										</thead>
										<tbody class="text-center">
											<tr>
												<td class="cell">1</td>
												<td class="cell">BS- Computer Science</td>
												<td class="cell">4</td>
												<td class="cell">8</td>
												<td class="cell">156</td>
												<td class="cell">
													<a class="btn btn-sm app-btn-secondary  " href="#">Edit</a>
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
										<h4 class="app-card-title">Add New Course</h4>
									</div>
									<!--//col-->
								</div>
								<!--//row-->
							</div>
							<!--//app-card-header-->
							<div class="app-card-body p-2 p-lg-4">
								<form class="row g-3">
									<div class="col-md-6">
										<label for="degreename" class="form-label">Degree Name</label>
										<input type="text" class="form-control" id="degreename">
									</div>
									<div class="col-md-6">
										<label for="totalsemester" class="form-label">Total Semester</label>
										<input type="number" class="form-control" id="totalsemester">
									</div>
									<div class="col-md-4">
										<label for="totalyear" class="form-label">Total Year</label>
										<input type="number" class="form-control" id="totalyear">
									</div>
									<div class="col-md-4">
										<label for="credithours" class="form-label">Credit Hours</label>
										<input type="number" class="form-control" id="credithours">
									</div>
									<div class="col-md-4">
										<label for="" class="form-label"> .</label>
										<input type="submit" class="form-control btn app-btn-primary text-white" id="submit" value="Add">
									</div>
								</form>
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