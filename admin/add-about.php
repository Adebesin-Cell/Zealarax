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
                                    <label for="title" class="d-block mb-2 col-form-label">
                                        Title
                                    </label>
                                    <input type="text" class="d-block form-control" name="title">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ui_position_x" class="d-block mb-2 col-form-label">
                                        UI position_x
                                    </label>
                                    <input type="text" class="d-block form-control" name="ui_position_x">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="desc" class="d-block mb-2 col-form-label">
                                        Description
                                    </label>
                                    <textarea name="description" class="d-block form-control" id="desc" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="featured_image" class="d-block mb-2 col-form-label">
                                        Featured Image
                                    </label>
                                    <form action="/" method="post" class="dropzone" id="myAwesomeDropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                        <div class="dz-message needsclick">
                                            <i class="h1 text-muted  uil-cloud-upload"></i>
                                            <h3>Drop file here or click to upload.</h3>
                                        </div>
                                    </form>
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