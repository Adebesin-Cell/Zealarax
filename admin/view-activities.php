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
                        <h4 class="font-size-18">Activities</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Activities</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="add-activities.php" class="btn btn--inline btn-info align-left">
                        Add Activity
                    </a>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<h2 class="mb-3">Our Activities</h3>
						</div>
						<div class="card-body">
							<table class="table" id="datatable">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Activity Image</th>
										<th>Activity Title</th>
										<th>Activity Desctiption</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td><img src="../assets/images/postImage.png" class="d-block img-fluid object-fit" width="100px" height="50px" alt="work"></td>
                                        <td>Meetups</td>
                                        <td style="width:300px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi officiis veniam vitae. Ab voluptatum dolorum in, nemo nisi voluptates optio ex ut repellat! Itaque rerum tenetur, voluptates non voluptas ipsum asperiores voluptatibus molestiae excepturi blanditiis officiis temporibus reprehenderit! Doloremque, facere placeat necessitatibus doloribus dolor quidem hic aspernatur laborum non earum.</td>
                                        <td>
                                            <a href="edit-activities.php" class="btn btn--inline btn-success">Edit</a>
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

