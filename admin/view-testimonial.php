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
                    <a href="add-testimonial.php" class="btn btn--inline btn-info align-left">
                        Add Testimonial
                    </a>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<h2 class="mb-3">Testimonials</h3>
						</div>
						<div class="card-body">
							<table class="table" id="datatable">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Testimonial Content</th>
										<th>Testifier Name</th>
										<th>Testifier Job Title</th>
                                        <th>Testifier Company</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td style="width:300px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum tempore dignissimos numquam tempora ea inventore officia aperiam alias ipsa optio reprehenderit temporibus voluptatem est impedit nemo, eveniet, dolorem magni sed! Cumque sequi iusto, modi id dolorem tempore repellendus explicabo officiis nobis accusamus eligendi velit necessitatibus pariatur eaque repellat provident maiores.</td>
                                        <td>Emmanuel Akin</td>
                                        <td>Senior Frontend Developer</td>
                                        <td> Cell </td>
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

