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
                                             <button class="btn btn--inline btn-success" data-toggle="modal" data-target=".bs-example-modal-center">Edit</button>
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

<!-- Modal -->
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Edit Stack</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-3">Language Category</label>
                                <select name="Language Category" class="form-control">
                                    <option value="0">Frontend</option>
                                    <option value="1">Backend</option>
                                    <option value="2">Cloud & Devops</option>
                                    <option value="3">Mobile</option>
                                    <option value="4">E Commerce</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  class="mb-3"> Language Title</label>
                                <input type="text" class="form-control" placeholder="Language Title" name="Language Title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <button class="btn btn-inline btn-success">Submit</button>
                            <button class="btn btn-inline btn-secondary" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>