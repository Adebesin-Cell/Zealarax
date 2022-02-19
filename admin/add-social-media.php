<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Social Media</h4>
                    </div>
                    <div class="col-sm-8 col-xl-6 d-flex justify-content-end">
                        <a href="view-social-media.php" class="btn btn-success">
                            View Social Media
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="d-block mb-2 col-form-label">
                                        Title
                                    </label>
                                    <input type="text" class="d-block form-control" id="title" name="title">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="icon" class="d-block mb-2 col-form-label">
                                        Icon
                                    </label>
                                    <input type="text" class="d-block form-control" id="icon" name="icon">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="iframe_widget" class="d-block mb-2 col-form-label">
                                        Iframe Widget
                                    </label>
                                    <input type="text" class="d-block form-control" id="iframe_widget" name="iframe_widget">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="url" class="d-block mb-2 col-form-label">
                                        URL
                                    </label>
                                    <input type="text" class="d-block form-control" id="url" name="url">
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