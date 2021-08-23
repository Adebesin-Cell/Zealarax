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
                        <h4 class="font-size-18">Our Stack</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Our Stack</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="view-stacks.php" class="btn btn--inline btn-info align-left">
                        View Stacks
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Add Stack</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Language Category</label>
                                            <select name="Language Category" class="form-control">
                                                <option value="0">Frontend</option>
                                                <option value="1">Backend</option>
                                                <option value="2">Cloud & Devops</option>
                                                <option value="3">Mobile</option>
                                                <option value="4">E Commerce</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <div class="form-group">
                                            <label class="mb-2">Language Name</label>
                                            <input type="text" name="Language Name" class="form-control" placeholder="Language Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-inline btn-success">Add Language</button>
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

