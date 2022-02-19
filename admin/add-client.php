<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Client</h4>
                    </div>
                    <div class="col-sm-8 col-xl-6 d-flex justify-content-end">
                        <a href="view-clients.php" class="btn btn-success">
                            View Clients
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="full-name" class="d-block mb-2 col-form-label">
                                        Full Name
                                    </label>
                                    <input type="text" class="d-block form-control" id="full-name" name="full-name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="d-block mb-2 col-form-label">
                                        Address
                                    </label>
                                    <input type="text" class="d-block form-control" id="address" name="address">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="d-block mb-2 col-form-label">
                                        Phone Number
                                    </label>
                                    <input type="number" class="d-block form-control" id="phone" name="phone">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="d-block mb-2 col-form-label">
                                        Email
                                    </label>
                                    <input type="email" class="d-block form-control" id="email" name="email">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="featured_image" class="d-block mb-2 col-form-label">
                                        Logo
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
                                <div class="col-md-12 mb-3">
                                    <label for="desc" class="d-block mb-2 col-form-label">
                                        Description
                                    </label>
                                    <textarea name="description" class="d-block form-control" id="desc" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="checkmeout0"
                                        />
                                        <label class="custom-control-label" for="checkmeout0"
                                            >Subscribed To Newsletter</label
                                        >
                                    </div>
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