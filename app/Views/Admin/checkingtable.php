<head>
	<title>EXCEEDマンション</title>
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />

	<script src="./main.js"></script>

</head>

<style>
	#snackbar {
		visibility: hidden;
		/* Hidden by default. Visible on click */
		min-width: 250px;
		/* Set a default minimum width */
		margin-left: -125px;
		/* Divide value of min-width by 2 */
		background-color: #333;
		/* Black background color */
		color: #fff;
		/* White text color */
		text-align: center;
		/* Centered text */
		border-radius: 2px;
		/* Rounded borders */
		padding: 16px;
		/* Padding */
		position: fixed;
		/* Sit on top of the screen */
		z-index: 1;
		/* Add a z-index if needed */
		left: 50%;
		/* Center the snackbar */
		bottom: 30px;
		/* 30px from the bottom */
	}

	/* Show the snackbar when clicking on a button (class added with JavaScript) */
	#snackbar.show {
		visibility: visible;
		/* Show the snackbar */
		/* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
		-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
		animation: fadein 0.5s, fadeout 0.5s 2.5s;
	}

	/* Animations to fade the snackbar in and out */
	@-webkit-keyframes fadein {
		from {
			bottom: 0;
			opacity: 0;
		}

		to {
			bottom: 30px;
			opacity: 1;
		}
	}

	@keyframes fadein {
		from {
			bottom: 0;
			opacity: 0;
		}

		to {
			bottom: 30px;
			opacity: 1;
		}
	}

	@-webkit-keyframes fadeout {
		from {
			bottom: 30px;
			opacity: 1;
		}

		to {
			bottom: 0;
			opacity: 0;
		}
	}

	@keyframes fadeout {
		from {
			bottom: 30px;
			opacity: 1;
		}

		to {
			bottom: 0;
			opacity: 0;
		}
	}
</style>

<body>

	<div class="column">
		<div class="card" style="background-color: #f2f3f8 ; height: 100%;">
			<div class="container mt-4">
				<form method='post' action='<?php echo base_url("Home/add"); ?>'>
					<nav class="navbar navbar-dark bg-dark" style="border-radius: 5px;">
						<a class="navbar-brand" href="#">EXCEEDマンション</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<a class="nav-item nav-link" type='submit' href="<?php echo base_url("Home/add"); ?>">Detail Water Measure</a>

							</div>
						</div>
					</nav>
					<div class="mt-3 table-responsive">
						<table class="table table-striped table-bordered table-vcenter text-nowrap mb-0">
							<thead>
								<tr>
									<th class="wd-lg-20p text-center">
										<select class="form-control">
											<option selected>XX棟 <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></option>
											<option value="1">101</option>
											<option value="2">102</option>
											<option value="3">103</option>
											<option value="3">104</option>
											<option value="3">105</option>
											<option value="3">106</option>

										</select>
									</th>
									<th class="wd-lg-20p text-center"><input type="text" class=" custom-select" id="workOrderDate" placeholder="Select Date"></th>

									<th class="wd-lg-20p text-center"> <label id="label_id_rom">4</label><label>/40完了</label></th>
								</tr>
							</thead>
						</table>
						<div class="row row-sm">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
								<div class="card custom-card">
									<div class="card-body">
										<div class="table-responsive userlist-table">
											<table id="checking_list" class="table table-striped table-bordered table-vcenter btn-table text-nowrap mb-0">
												<thead class="thead-dark">
													<tr>
														<th class="wd-lg-8p text-center"><span><?= lang('component.id_building') ?></span></th>
														<th class="wd-lg-20p text-center"><span><?= lang('component.previous_value') ?></span></th>
														<th class="wd-lg-20p text-center"><span><?= lang('component.worth_this_time') ?></span></th>
														<th class="wd-lg-20p text-center"><span><?= lang('component.money_used') ?></span></th>
														<th class="wd-lg-10p text-center"><span><?= lang('component.camera') ?></span></th>

													</tr>
												</thead>
												<tbody>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</form>
				<div class="d-flex justify-content-end">
					<p><input class="btn btn-primary" type='submit' name='submit' id="updateData" value="再送信" style="margin-top: 20px; " onclick="myFunction()"></input> </p>
					<div id="snackbar">This function is being tested</div>
				</div>
			</div>
		</div>
	</div>

</body>






<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>


<script>
	$(document).ready(function() {
		var dataTable = $('#checking_list').DataTable({
			responsive: true,
			searching: false,
			filter: false,
			ordering: false,
			select: false,
			paging: false
		});

		var count_room = dataTable.rows().count();
		document.getElementById("label_id_rom").innerHTML = count_room;

		$("#updateData").click(function() {

		})
	});

	function myFunction() {
		var x = document.getElementById("snackbar");
		x.className = "show";
		setTimeout(function() {
			x.className = x.className.replace("show", "");
		}, 3000);
	}

	function showModal() {
		$('#exampleModal').modal('show');
	}
	$("#workOrderCompletedDate").datepicker({
		format: "dd/mm/yy",
		startDate: "0d",
		todayBtn: "linked",
		todayHighlight: true,
		toggleActive: true,
		orientation: "bottom auto"
	}).on("change", function() {

	});
	$("#workOrderDate").datepicker({
		autoclose: true,
		inline: true,
		sideBySide: true,
		stepping: 5,
		todayHighlight: true,
		orientation: "bottom auto"
	}).on("change", function() {

	});
</script>
</body>

</html>