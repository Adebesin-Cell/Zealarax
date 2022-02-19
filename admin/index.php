<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Dashboard</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Today
                                            Revenue</span>
                                        <h2 class="mb-0">$2189</h2>
                                    </div>
                                    <div class="align-self-center">
                                        <div id="today-revenue-chart" class="apex-charts"></div>
                                        <span class="text-success font-weight-bold font-size-13"><i
                                                class='uil uil-arrow-up'></i> 10.21%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Product
                                            Sold</span>
                                        <h2 class="mb-0">1065</h2>
                                    </div>
                                    <div class="align-self-center">
                                        <div id="today-product-sold-chart" class="apex-charts"></div>
                                        <span class="text-danger font-weight-bold font-size-13"><i
                                                class='uil uil-arrow-down'></i> 5.05%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                                            Customers</span>
                                        <h2 class="mb-0">11</h2>
                                    </div>
                                    <div class="align-self-center">
                                        <div id="today-new-customer-chart" class="apex-charts"></div>
                                        <span class="text-success font-weight-bold font-size-13"><i
                                                class='uil uil-arrow-up'></i> 25.16%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                                            Visitors</span>
                                        <h2 class="mb-0">750</h2>
                                    </div>
                                    <div class="align-self-center">
                                        <div id="today-new-visitors-chart" class="apex-charts"></div>
                                        <span class="text-danger font-weight-bold font-size-13"><i
                                                class='uil uil-arrow-down'></i> 5.05%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
    include "includes/footer.php";
?>