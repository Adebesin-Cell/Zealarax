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
                        <h4 class="font-size-18">Address</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contact</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Address</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Add Address</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Address Description</label>
                                           <textarea name="Address" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-inline btn-success">Add Address</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<h2 class="mb-3">Address</h3>
						</div>
						<div class="card-body">
							<table class="table" id="datatable">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Address</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td>Opp Johnson Mechanic</td>
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
                <h5 class="modal-title mt-0">Edit Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="mb-3"> Address</label>
                            <textarea name="Edit Address" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <button class="btn btn-inline btn-success">Update Address</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>