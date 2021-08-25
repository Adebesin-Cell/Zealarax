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
                    <a href="add-work.php" class="btn btn--inline btn-info align-left">
                        Add work
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Edit Work</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Work Title</label>
                                            <input type="text" name="work-name" class="form-control" placeholder="Work Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Work Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="work-image" class="custom-file-input" placeholder="Work image here" id="customFile">
                                                <label class="form-control custom-file-label" id="customFile">Work Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="mb-2">Work type</label>
                                            <select name="work-type" class="form-control">
                                                <option value="1">Web Application</option>
                                                <option value="2">Website</option>
                                                <option value="3">Mobile Application</option>
                                                <option value="4">Custom Software</option>
                                                <option value="5">Desktop Application</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Work Description</label>
                                            <textarea name="work description" cols="30" rows="10" class="form-control textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-inline btn-success">Submit</button>
                                        <button class="btn btn-inline btn-secondary">Cancel</button>
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

