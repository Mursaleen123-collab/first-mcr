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
					<div class="col-10 col-lg-10 mx-auto">
						<div class="app-card app-card-stat shadow-sm h-100">
							<div class="app-card-header p-3">
								<div class="row justify-content-between align-items-center">
									<div class="col-auto">
										<h4 class="app-card-title">Add Student</h4>
									</div>
									<!--//col-->
									<div class="col-auto">
										<div class="card-header-action">
											<a href="student-list.php">Veiw All</a>
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
									<form class="row g-3">
										<div class="col-md-6">
											<label for="firstname" class="form-label">First Name</label>
											<input type="text" class="form-control" id="firstname">
										</div>
										<div class="col-md-6">
											<label for="lastname" class="form-label">Last Name</label>
											<input type="text" class="form-control" id="lastname">
										</div>
										<div class="col-md-6">
											<label for="email" class="form-label">Email</label>
											<input type="email" class="form-control" id="email">
										</div>
										<div class="col-md-6">
											<label for="inputPassword4" class="form-label">Password</label>
											<input type="password" class="form-control" id="inputPassword4">
										</div>
										<div class="col-md-3">
											<label for="Gender" class="form-label">Gender</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
												<label class="form-check-label" for="flexRadioDefault1">Male</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
												<label class="form-check-label" for="flexRadioDefault1">Female</label>
											</div>
										</div>
										<div class="col-md-3">
											<label for="session" class="form-label">Session</label>
											<input type="text" class="form-control" id="session">
										</div>
										<div class="col-md-3">
											<label for="phonenumber" class="form-label">Cell No#</label>
											<input type="number" class="form-control" id="phonenumber">
										</div>
										<div class="col-md-3">
											<label for="Degreename" class="form-label">Degree Name</label>
											<select id="Degreename" class="form-select">
												<option selected>Choose...</option>
												<option>BS IT</option>
												<option>BS CS</option>
												<option>BS SE</option>
											</select>
										</div>
										<div class="col-12">
											<label for="inputAddress" class="form-label">Address</label>
											<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
										</div>
										<div class="col-12">
											<label for="inputAddress2" class="form-label">Address 2</label>
											<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
										</div>
										<div class="col-md-4">
											<label for="inputCity" class="form-label">City</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="col-md-4">
											<label for="inputState" class="form-label">State</label>
											<select id="inputState" class="form-select">
												<option selected>Choose...</option>
												<option>...</option>
											</select>
										</div>
										<div class="col-md-2">
											<label for="inputZip" class="form-label">Zip</label>
											<input type="text" class="form-control" id="inputZip">
										</div>
										<div class="col-md-2">
											<label for="studentfee" class="form-label">Fee/-</label>
											<input type="number" class="form-control" id="studentfee">
										</div>
										<div class="row mt-3">
											<div class="col-lg-2 mx-auto">
												<p><b>Qualification</b>
												<p>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-lg-12">
												<div class="bg-custom table-responsive">
													<table class="table ">
														<thead>
															<tr>
																<th scope="col">Sl.No.</th>
																<th scope="col">Examination</th>
																<th scope="col">Board</th>
																<th scope="col">Percentage</th>
																<th scope="col">Year Of Passing</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th scope="row">1</th>
																<td> <input type="text" class="form-control" placeholder="Examination" required></td>
																<td> <input type="text" class="form-control" placeholder="Board" required></td>
																<td> <input type="text" class="form-control" placeholder="Percentage" required></td>
																<td> <input type="text" class="form-control" placeholder="Year Of Passing" required></td>
															</tr>
															<tr>
																<th scope="row">2</th>
																<td> <input type="text" class="form-control" placeholder="Examination" required></td>
																<td> <input type="text" class="form-control" placeholder="Board" required></td>
																<td> <input type="text" class="form-control" placeholder="Percentage" required></td>
																<td> <input type="text" class="form-control" placeholder="Year Of Passing" required></td>
															</tr>
															<tr>
																<th scope="row">3</th>
																<td> <input type="text" class="form-control" placeholder="Examination" required></td>
																<td> <input type="text" class="form-control" placeholder="Board" required></td>
																<td> <input type="text" class="form-control" placeholder="Percentage" required></td>
																<td> <input type="text" class="form-control" placeholder="Year Of Passing" required></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="col-12 text-end">
											<button type="submit" class="btn btn-primary">Add</button>
										</div>
									</form>
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