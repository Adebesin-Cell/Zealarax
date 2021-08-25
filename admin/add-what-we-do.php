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
                        <h4 class="font-size-18">What We Do</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">What We Do</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="view-what-we-do.php" class="btn btn--inline btn-info align-left">
                        View Services
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Add Services</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Services Title</label>
                                            <input type="text" name="Services Title" class="form-control" placeholder="Services Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Services Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="Services Image" class="custom-file-input" placeholder="Services Image" id="customFile">
                                                <label class="form-control custom-file-label" id="customFile">Services Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Services Description</label>
                                            <textarea name="Services Description" cols="30" rows="10" class="form-control textarea"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-inline btn-success">Add Services</button>
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

