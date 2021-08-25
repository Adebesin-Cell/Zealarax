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
                        <h4 class="font-size-18">About Intro</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">About Intro</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="about-main.php" class="btn btn--inline btn-info align-left">
                        Add About
                    </a>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<h2 class="mb-3">About</h3>
						</div>
						<div class="card-body">
							<table class="table" id="datatable">
								<thead>
									<tr>
										<th>S/N</th>
										<th>About Banner</th>
										<th>About Description</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td style="width:300px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi officiis veniam vitae. Ab voluptatum dolorum in, nemo nisi voluptates optio ex ut repellat! Itaque rerum tenetur, voluptates non voluptas ipsum asperiores voluptatibus molestiae excepturi blanditiis officiis temporibus reprehenderit! Doloremque, facere placeat necessitatibus doloribus dolor quidem hic aspernatur laborum non earum.</td>
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
                <h5 class="modal-title mt-0">Edit About Main</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
               <form action="#">
                   <div class="row">
                       <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-3">About Banner</label>
                                <div class="custom-file">
                                    <input type="file" name="About Banner" class="custom-file-input" placeholder="About Banner" id="customFile">
                                    <label class="form-control custom-file-label" id="customFile">About Banner</label>
                                </div>
                            </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                                <label class="mb-3">About Description</label>
                                <textarea name="about description" cols="30" rows="10" class="form-control"></textarea>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-3">
                            <button class="btn btn-inline btn-success">Update About Main</button>
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </div>
</div>