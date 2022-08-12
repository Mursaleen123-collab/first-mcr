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
				<div class="row g-4 mb-4">
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<div class="app-card-header p-3">
								<div class="row justify-content-between align-items-center">
									<div class="col-auto">
										<h4 class="app-card-title">Student Fee</h4>
									</div>
									<!--//col-->
									<div class="col-auto">
										<form class="row gx-1 align-items-center">
											<div class="col-auto">
												<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search Student">
											</div>
											<div class="col-auto">
												<button type="submit" class="btn app-btn-secondary">Search</button>
											</div>
										</form>
									</div>
									<!--//col-->
								</div>
								<!--//row-->
							</div>
							<!--//app-card-header-->
							<div class="app-card-body p-2 p-lg-4">
								<form class="row g-3">
									<div class="col-md-6">
										<label for="studentname" class="form-label">Student Name</label>
										<input type="text" class="form-control" id="studentname" value="Mursaleen Umar" disabled>
									</div>
									<div class="col-md-6">
										<label for="degreename" class="form-label">Degree Name</label>
										<input type="text" class="form-control" id="degreename" value="BS computer Science" disabled>
									</div>
									<div class="col-md-4">
										<label for="totalfees" class="form-label">Total Fee</label>
										<input type="text" class="form-control" id="totalfees" value="400000" disabled>
									</div>
									<div class="col-md-4">
										<label for="feepaid" class="form-label">Fee Paid</label>
										<input type="text" class="form-control" id="feepaid" value="25000" disabled>
									</div>
									<div class="col-md-4">
										<label for="dateoffeepaid" class="form-label">Date</label>
										<input type="date" class="form-control" id="dateoffeepaid" disabled>
									</div>
									<div class="row mt-3">
										<div class="col-lg-2 mx-auto">
											<p><b>Installments</b>
											<p>
										</div>
									</div>
									<div class="col-md-3 text-center">
										<label for="1stinstallment" class="form-label">1st</label>
										<input type="text" class="form-control" id="1stinstallment" value="50000" disabled>
									</div>
									<div class="col-md-3 text-center">
										<label for="1stinstallment" class="form-label">2nd</label>
										<input type="text" class="form-control" id="1stinstallment" value="50000" disabled>
									</div>
									<div class="col-md-3 text-center">
										<label for="1stinstallment" class="form-label">3rd</label>
										<input type="text" class="form-control" id="1stinstallment" value="50000" disabled>
									</div>
									<div class="col-md-3 text-center">
										<label for="1stinstallment" class="form-label">4th</label>
										<input type="text" class="form-control" id="1stinstallment" value="50000" disabled>
									</div>
									<div class="col-md-3 text-center">
										<label for="1stinstallment" class="form-label">5th</label>
										<input type="text" class="form-control" id="1stinstallment" value="50000" disabled>
									</div>
									<div class="col-md-3 text-center">
										<label for="1stinstallment" class="form-label">6th</label>
										<input type="text" class="form-control" id="1stinstallment" value="50000" disabled>
									</div>
									<div class="col-md-3 text-center">
										<label for="1stinstallment" class="form-label">7th</label>
										<input type="text" class="form-control" id="1stinstallment" value="50000" disabled>
									</div>
									<div class="col-md-3 text-center">
										<label for="1stinstallment" class="form-label">8th</label>
										<input type="text" class="form-control" id="1stinstallment" value="50000" disabled>
									</div>
									<div class="col-md-8">
										<label for="feetopay" class="form-label">_</label>
										<input type="number" class="form-control" id="feetopay" placeholder="Add fee amount to Pay">
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
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<!--//app-card-header-->
							<div class="app-card-body p-3 p-lg-4">
								<div class="table-responsive">
									<table class="table app-table-hover table-bordered mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Sr#</th>
												<th class="cell">Name</th>
												<th class="cell">Date</th>
												<th class="cell">Amount</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<tr>
												<td class="cell">1</td>
												<td class="cell">Mursaleen Umar</td>
												<td class="cell">11/09/2018</td>
												<td class="cell">50000</td>
											</tr>
											<tr>
												<td class="cell">2</td>
												<td class="cell">Mursaleen Umar</td>
												<td class="cell">11/09/2018</td>
												<td class="cell">50000</td>
											</tr>
											<tr>
												<td class="cell">3</td>
												<td class="cell">Mursaleen Umar</td>
												<td class="cell">11/09/2018</td>
												<td class="cell">50000</td>
											</tr>
											<tr>
												<td class="cell" colspan="3">Total Paid</td>
												<td class="cell">150000</td>
											</tr>
											<tr>
												<td class="cell" colspan="3">Total Fee:</td>
												<td class="cell">400000</td>
											</tr>
											<tr class="table-dark">
												<td class="cell" colspan="3">Remaining :</td>
												<td class="cell">350000</td>
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