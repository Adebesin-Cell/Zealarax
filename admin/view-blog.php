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
                        <h4 class="font-size-18">Blogs</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Blogs</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="add-blog.php" class="btn btn--inline btn-info align-left">
                        Add Blog
                    </a>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<h2 class="mb-3">Blogs</h3>
						</div>
						<div class="card-body">
							<table class="table" id="datatable">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Blog Image</th>
										<th>Blog Title</th>
										<th>Blog Type</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>2</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>3</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>4</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>5</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>6</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>7</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>8</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>9</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>10</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>11</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Development</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
                                            <button class="btn btn--inline btn-danger">Delete</button>
                                        </td>
									</tr>
                                    <tr>
										<td>12</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Redeeming Technology With Javascript</td>
                                        <td>Technology</td>
                                        <td>
                                            <a href="edit-blog.php" class="btn btn--inline btn-success">Edit</a>
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

