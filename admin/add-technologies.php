<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">About</h4>
                    </div>
                    <div class="col-sm-8 col-xl-6 d-flex justify-content-end">
                        <a href="view-about.php" class="btn btn-success">
                            View About
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="d-block mb-2 col-form-label">
                                        Name
                                    </label>
                                    <input type="text" class="d-block form-control" id="name" name="name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="slug" class="d-block mb-2 col-form-label">
                                        Slug
                                    </label>
                                    <input type="text" class="d-block form-control" id="slug" name="slug">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="desc" class="d-block mb-2 col-form-label">
                                        Description
                                    </label>
                                    <textarea name="description" class="d-block form-control" id="desc" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary d-block w-25">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
    include "includes/footer.php";
?>