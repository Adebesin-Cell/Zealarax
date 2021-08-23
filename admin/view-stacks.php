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
                        <h4 class="font-size-18">Our Stack</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Our Stack</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="add-stack.php" class="btn btn--inline btn-info align-left">
                        Add Stack
                    </a>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<h2 class="mb-3">Our Stack</h3>
						</div>
						<div class="card-body">
							<table class="table" id="datatable">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Language Category</th>
										<th>Language</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td>Frontend</td>
                                        <td>HTML</td>
                                        <td>
                                            <button class="btn btn--inline btn-success">Edit</button>
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

