<?php 
include "includes/header.php";
include "includes/sidebar.php";
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4 class="font-size-18">Our Work</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Work</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="add-work.php" class="btn btn--inline btn-info align-left">
                        Add Work
                    </a>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<h2 class="mb-3">Works</h3>
						</div>
						<div class="card-body">
							<table class="table" id="datatable">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Work Image</th>
										<th>Work Title</th>
										<th>Work Type</th>
                                        <th>Work Description</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td><img src="../assets/images/work1.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Prunny</td>
                                        <td>Mobile Application</td>
                                        <td> Using flutter to build an
                                        almost fun time-tracking
                                        app for Android and iOS </td>
                                        <td>
                                            <a href="edit-work.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>2</td>
                                        <td><img src="../assets/images/work2.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Prunny</td>
                                        <td>Mobile Application</td>
                                        <td> Using flutter to build an
                                        almost fun time-tracking
                                        app for Android and iOS </td>
                                        <td>
                                            <a href="edit-work.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>3</td>
                                        <td><img src="../assets/images/work3.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Prunny</td>
                                        <td>Mobile Application</td>
                                        <td> Using flutter to build an
                                        almost fun time-tracking
                                        app for Android and iOS </td>
                                        <td>
                                            <a href="edit-work.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
<?php
include 'includes/footer.php';
?>

