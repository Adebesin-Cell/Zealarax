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
                        <h4 class="font-size-18">Blog</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="view-blog.php" class="btn btn--inline btn-info align-left">
                        View Blogs
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Add Blog</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Blog Title</label>
                                            <input type="text" name="blog-title" class="form-control" placeholder="Blog Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Blog Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="Blog Image" class="custom-file-input" placeholder="Blog image here" id="customFile">
                                                <label class="form-control custom-file-label" id="customFile">Blog Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Blog type</label>
                                            <select name="blog-type" class="form-control">
                                                <option value="0">All</option>
                                                <option value="1">Development</option>
                                                <option value="2">Technology</option>
                                                <option value="3">Design</option>
                                                <option value="4">Organization</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Blog Description</label>
                                            <textarea name="blog description" cols="30" rows="10" class="form-control textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-inline btn-success">Add Blog</button>
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

