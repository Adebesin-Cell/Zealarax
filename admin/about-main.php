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
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="view-about-main.php" class="btn btn--inline btn-info align-left">
                        View About Main
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Add About Intro</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">About Banner</label>
                                            <div class="custom-file">
                                                <input type="file" name="work-image" class="custom-file-input" placeholder="About Banner" id="customFile">
                                                <label class="form-control custom-file-label" id="customFile">About Banner</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">About Description</label>
                                            <textarea name="About description" cols="30" rows="10" class="form-control textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-inline btn-success">Add About Main</button>
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

