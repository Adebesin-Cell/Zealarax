<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Portfolio</h4>
                    </div>
                    <div class="col-sm-8 col-xl-6 d-flex justify-content-end">
                        <a href="add-portfolio.php" class="d-flex align-items-center btn btn-primary">
                            <i class="uil-plus"></i>
                            <span class="ml-1">
                                Add Portfolio
                            </span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-1">View Portfolio</h4>
                                <table
                                id="basic-datatable"
                                class="table w-100 dt-responsive wrap"
                                >
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>URL</th>
                                        <th>Featured Image</th>
                                        <th>Service ID</th>
                                        <th>Slug</th>
                                        <th>UI Position X</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ashey</td>
                                        <td>Ashey Manny</td>
                                        <td>Lorem ipsum dolor ... <a href="" class="">Read more</a></td>
                                        <td><a href="https:/url" class="">ashey.manny.com</a></td>
                                        <td>3</td>
                                        <td>16</td>
                                        <td>right</td>
                                        <td>
                                            <img src="./assets/images/flags/french.jpg" alt="" class="d-block img-fluid">
                                        </td>
                                        <td>
                                            <button class="btn btn-success">
                                                <i class="uil uil-edit"></i>
                                            </button>
                                            <button class="btn btn-danger">
                                                <i class="uil uil-exit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
<?php
    include "includes/footer.php";
?>