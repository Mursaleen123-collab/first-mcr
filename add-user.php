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
					<div class="col-8 col-lg-8 mx-auto">
						<div class="app-card app-card-stat shadow-sm h-100">
							<div class="app-card-header p-3">
								<div class="row justify-content-between align-items-center">
									<div class="col-auto">
										<h4 class="app-card-title">Add Admin</h4>
									</div>
									<!--//col-->
									<div class="col-auto">
										<div class="card-header-action">
											<a href="admin-list.php">Veiw All</a>
										</div>
										<!--//card-header-actions-->
									</div>
									<!--//col-->
								</div>
								<!--//row-->
							</div>
							<!--//app-card-header-->
							<div class="app-card-body p-3 p-lg-4">
								<div class="auth-form-container text-start mx-auto">
									<form class="auth-form auth-signup-form">
										<div class="mb-3 row">
											<label for="firstname" class="col-sm-3 col-form-label">First Name</label>
											<div class="col-sm-9 ">
												<input type="text" class="form-control" id="firstname">
											</div>
										</div>
										<div class="mb-3 row">
											<label for="email" class="col-sm-3 col-form-label">Email</label>
											<div class="col-sm-9 ">
												<input type="email" class="form-control" id="email">
											</div>
										</div>
										<div class="mb-3 row">
											<label for="dateofhiring" class="col-sm-4 col-form-label">Date of Hiring</label>
											<div class="col-sm-8 ">
												<input type="date" class="form-control" id="dateofhiring">
											</div>
										</div>
										<div class="mb-3 row">
											<label for="password" class="col-sm-3 col-form-label">Password</label>
											<div class="col-sm-9 ">
												<input type="password" class="form-control" id="password	">
											</div>
										</div>
										<div class="mb-3 row">
											<label for="address" class="col-sm-3 col-form-label">Address</label>
											<div class="col-sm-9 ">
												<input type="text" class="form-control" id="address">
											</div>
										</div>
										<div class="mb-3 row">
											<label for="phonenumber" class="col-sm-3 col-form-label">Cell No#</label>
											<div class="col-sm-9 ">
												<input type="number" class="form-control" id="phonenumber">
											</div>
										</div>
										<div class="mb-3 row">
											<label for="post" class="col-sm-3 col-form-label">Post</label>
											<div class="col-sm-9 ">
												<select class="form-select form-select-md" aria-label=".form-select-sm example">
													<option selected>Open this select menu</option>
													<option value="1">Teacher</option>
													<option value="2">Examiner</option>
													<option value="3">Acadamics</option>
												</select>
											</div>
										</div>
										<div class="mb-3 row">
											<label for="specialization" class="col-sm-4 col-form-label">Specialization</label>
											<div class="col-sm-8 ">
												<select class="form-select form-select-md" aria-label=".form-select-sm example">
													<option selected>Open this select menu</option>
													<option value="1">Teacher</option>
													<option value="2">Examiner</option>
													<option value="3">Acadamics</option>
												</select>
											</div>
										</div>
										<div class="mb-3 row">
											<label for="salary" class="col-sm-3 col-form-label">Salary</label>
											<div class="col-sm-9 ">
												<input type="number" class="form-control" id="salary">
											</div>
										</div>
								</div>
								<div class="text-end">
									<button type="submit" class="btn app-btn-primary w-30 theme-btn ">Add</button>
								</div>
								</form>
								<!--//auth-form-->
							</div>
							<!--//auth-form-container-->
						</div>
						<!--//app-card-body-->

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