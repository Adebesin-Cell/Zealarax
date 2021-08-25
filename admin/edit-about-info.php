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
                        <h4 class="font-size-18">About Intro</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">About Intro</a></li>
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Edit About Info</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">About Info Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="About Info Image" class="custom-file-input" placeholder="About Info Image" id="customFile">
                                                <label class="form-control custom-file-label" id="customFile">About Info Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">About Info Title</label>
                                            <input type="text" name="About Info Title" placeholder="About Info Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">About Info Description</label>
                                            <textarea name="About Info description" cols="30" rows="10" class="form-control textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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

