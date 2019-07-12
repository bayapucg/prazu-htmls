
	<?php include('head.php'); ?>
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/media/css/responsive.dataTables.css">

	<?php include('header.php'); ?>
	<?php include('sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add Feedback & Ratings List</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Feedback & Ratings List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Daily Basis</a>
									<a class="dropdown-item" href="#">Weekly Basis</a>
									<a class="dropdown-item" href="#">Mothly Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- multiple select row Datatable End -->
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
				
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="">Sr.no</th>
									<th class="table-plus datatable-nosort">Restaurant Name</th>
									<th>Rating</th>
									<th>Comments</th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="1">1</td>
									<td class="table-plus">Mehfil</td>
									<td>
										<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								
							</div>
									</td>
									<td><textarea class="form-control" rows="3">Comment</textarea></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="1">1</td>
									<td class="table-plus">Pista House</td>
									<td>
									<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								
							</div>
									</td>
									<td><textarea class="form-control" rows="3">Comment</textarea></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="1">1</td>
									<td class="table-plus">Kritunga</td>
									<td>
									<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								
							</div>
									</td>
									<td><textarea class="form-control" rows="3">Comment</textarea></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="1">1</td>
									<td class="table-plus">Southern Cafe</td>
									<td>
										<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								
							</div>
									</td>
									<td><textarea class="form-control" rows="3">Comment</textarea></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<?php include('footer.php'); ?>
		</div>
	</div>
	<?php include('script.php'); ?>
	<script src="../src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="../src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="../src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="../src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="../src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="../src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="../src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="../src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="../src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>
</body>
</html>
