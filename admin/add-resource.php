<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Resources</h4>
                    </div>
                    <div class="col-sm-8 col-xl-6 d-flex justify-content-end">
                        <a href="view-resources.php" class="btn btn-success">
                            View Resources
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="card w-50">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="title" class="d-block mb-2 col-form-label">
                                        Title
                                    </label>
                                    <input type="text" class="form-control d-block" name="title" id="title">
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary d-block w-25">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
    include "includes/footer.php";
?> 