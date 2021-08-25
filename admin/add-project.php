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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Works</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Our Work</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="view-projects.php" class="btn btn--inline btn-info align-left">
                        View Works
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Add Works</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Work Title</label>
                                            <input type="text" name="Work Title" class="form-control" placeholder="Work Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Work Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="Work Image" class="custom-file-input" placeholder="Work Image here" id="customFile">
                                                <label class="form-control custom-file-label" id="customFile">Work Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Work type</label>
                                            <select name="Work type" class="form-control">
                                                <option value="0">Website</option>
                                                <option value="1">Web Application</option>
                                                <option value="2">Mobile Application</option>
                                                <option value="3">Desktop Application</option>
                                                <option value="4">Custom Software</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-inline btn-success">Add Project</button>
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

