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
                        <h4 class="font-size-18">Social Media</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contact</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Social Media</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="add-social-media.php" class="btn btn--inline btn-info align-left">
                        Add Social Media
                    </a>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<h2 class="mb-3">Social Media</h3>
						</div>
						<div class="card-body">
							<table class="table" id="datatable">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Social Media Icon</th>
										<th>Social Media Handle</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td><a href="">https:/facebook.com/ZelaraxHQ</a></td>
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
                <h5 class="modal-title mt-0">Edit Social Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-3">Social Media Icon</label>
                                <div class="custom-file">
                                    <input type="file" name="Social Media Icon" class="custom-file-input" placeholder="Social Media Icon" id="customFile">
                                    <label class="form-control custom-file-label" id="customFile">Social Media Icon</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  class="mb-3"> Social Media Link</label>
                                <input type="text" class="form-control" placeholder="Social Media Link" name="Social Media Handle">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <button class="btn btn-inline btn-success">Update Social Media</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>