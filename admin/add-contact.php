<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Contacts</h4>
                    </div>
                    <div class="col-sm-8 col-xl-6 d-flex justify-content-end">
                        <a href="view-contacts.php" class="btn btn-success">
                            View Contacts
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
                                    <label for="referrer" class="d-block mb-2 col-form-label">
                                        Referrer
                                    </label>
                                    <input type="text" class="d-block form-control" id="referrer" name="referrer">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="service_id" class="d-block mb-2 col-form-label">
                                        Service ID
                                    </label>
                                    <select class="form-control custom-select" id="service_id" name="service_id">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
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
                                    <label for="about" class="d-block mb-2 col-form-label">
                                        About
                                    </label>
                                    <textarea name="About" class="d-block form-control" id="about" cols="30" rows="10"></textarea>
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