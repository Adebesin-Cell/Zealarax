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
                    <a href="view-about-main.php" class="btn btn--inline btn-info align-left">
                        View Social Media
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Add Social Media</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Social Media Icon</label>
                                            <div class="custom-file">
                                                <input type="file" name="Social Media Icon" class="custom-file-input" placeholder="Social Media Icon" id="customFile">
                                                <label class="form-control custom-file-label" id="customFile">Social Media Icon</label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Social Media Link</label>
                                            <input type="text" name="social media handle" placeholder="social media handle" class="form-control">
                                        </div>
                                    </div>   
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-inline btn-success">Add Social Media</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
    include 'includes/footer.php';
?>

