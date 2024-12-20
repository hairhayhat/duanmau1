<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- chart caard section start -->
                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-primary border-5 border-0 card o-hidden">
                                <div class="custome-1-bg b-r-4 card-body">
                                    <div class="media align-items-center static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Earnings</span>
                                            <h4 class="mb-0 counter">6659
                                                <span class="badge badge-light-primary grow">
                                                    <i data-feather="trending-up"></i>8.5%</span>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i data-feather="database"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-danger border-5 border-0 card o-hidden">
                                <div class=" custome-2-bg  b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Booking</span>
                                            <h4 class="mb-0 counter">9856
                                                <span class="badge badge-light-danger grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i data-feather="shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-secondary border-5 border-0  card o-hidden">
                                <div class=" custome-3-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Reviews</span>
                                            <h4 class="mb-0 counter">893
                                                <span class="badge badge-light-secondary grow ">
                                                    <i data-feather="trending-up"></i>8.5%</span>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-success border-5 border-0 card o-hidden">
                                <div class=" custome-4-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total User</span>
                                            <h4 class="mb-0 counter">45631
                                                <span class="badge badge-light-success grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chart caard section End -->

                        <!-- Earning chart star-->
                        <div class="col-xl-4">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Earning</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="bar-chart-earning"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning chart end-->

                        <!-- Earning chart star-->
                        <div class="col-xl-8">
                            <div class="card o-hidden ">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Revenue Report</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="report-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning chart  end-->

                        <!-- Transactions start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>Transactions</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div>
                                        <div class="table-responsive table-desi">
                                            <table class="user-table transactions-table table border-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="transactions-icon">
                                                                <i data-feather="shield"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Wallets</h6>
                                                                <p>Starbucks</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$74</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-1">
                                                            <div class="transactions-icon">
                                                                <i data-feather="check"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Bank Transfer</h6>
                                                                <p>Add Money</p>
                                                            </div>
                                                        </td>

                                                        <td class="success">+$125</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-2">
                                                            <div class="transactions-icon">
                                                                <i data-feather="dollar-sign"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Paypal</h6>
                                                                <p>Add Money</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-3">
                                                            <div class="transactions-icon">
                                                                <i data-feather="credit-card"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Mastercard</h6>
                                                                <p>Ordered Food</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$40</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-4 pb-0">
                                                            <div class="transactions-icon">
                                                                <i data-feather="trending-up"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Transfer</h6>
                                                                <p>Refund</p>
                                                            </div>
                                                        </td>

                                                        <td class="success pb-0">+$90</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Transactions end-->

                        <!-- visitors chart start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="h-100">
                                <div class="card o-hidden card-hover">
                                    <div class="card-header border-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="card-header-title">
                                                <h4>Visitors</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="pie-chart">
                                            <div id="pie-chart-visitors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- visitors chart end-->

                        <!-- New & Update start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>New & Update</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <ul class="StepProgress">
                                        <li class="StepProgress-item">
                                            <strong>Update Product</strong>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="StepProgress-item">
                                            <strong>James liked Nike Shoes</strong>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="StepProgress-item">
                                            <strong>john just buy your product</strong>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="StepProgress-item">
                                            <strong>Jihan dor just save your product</strong>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- New & Update end-->

                        <!-- To Do List start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>To Do List</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <ul class="to-do-list">
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Pick up kids from school</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault1">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Prepare or presentation.</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault2">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Create invoice</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault3">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Meeting with Alisa</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>

                                        <li class="to-do-item">
                                            <form class="row g-2">
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Enter Task Name">
                                                </div>
                                                <div class="col-lg-4">
                                                    <button type="submit" class="btn btn-primary w-100">Add
                                                        task</button>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- To Do List end-->

                        <!-- Recent Activity start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>Recent Activity</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <ul class="recent-activity">
                                        <li class="recent-item">
                                            <div class="recent-icon">
                                                <span class="lnr lnr-calendar-full"></span>
                                                <p>Calendar Updated</p>
                                            </div>

                                            <div class="recent-timer">
                                                <h6 class="color-1">Just Now</h6>
                                            </div>
                                        </li>
                                        <li class="recent-item">
                                            <div class="recent-icon">
                                                <i data-feather="alert-circle"></i>
                                                <p>Commrnted on a post</p>
                                            </div>

                                            <div class="recent-timer">
                                                <h6 class="color-2">5 Min</h6>
                                            </div>
                                        </li>
                                        <li class="recent-item">
                                            <div class="recent-icon">
                                                <i data-feather="truck"></i>
                                                <p>Order 392 shipped</p>
                                            </div>

                                            <div class="recent-timer">
                                                <h6 class="color-3">12 Min</h6>
                                            </div>
                                        </li>
                                        <li class="recent-item">
                                            <div class="recent-icon">
                                                <i data-feather="dollar-sign"></i>
                                                <p>Invoice 653 has been paid</p>
                                            </div>

                                            <div class="recent-timer">
                                                <h6 class="color-4">45 Min</h6>
                                            </div>
                                        </li>
                                        <li class="recent-item">
                                            <div class="recent-icon">
                                                <span class="lnr lnr-user"></span>
                                                <p>A new user has been added</p>
                                            </div>

                                            <div class="recent-timer">
                                                <h6 class="color-1">1 Hr</h6>
                                            </div>
                                        </li>
                                        <li class="recent-item mb-0">
                                            <div class="recent-icon">
                                                <span class="lnr lnr-select"></span>
                                                <p>Finace report</p>
                                            </div>

                                            <div class="recent-timer">
                                                <h6 class="color-2">Just Now</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Activity end-->

                        <!-- Browser States start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>Browser States</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <ul class="brower-states">
                                        <li class="brower-item">
                                            <div class="browser-image">
                                                <img src="assets/images/brower-image/chrome.png" class="img-fluid"
                                                    alt="">
                                                <h5>Chrome</h5>
                                            </div>

                                            <div class="browser-progressbar">
                                                <h6>84%</h6>
                                            </div>
                                        </li>
                                        <li class="brower-item">
                                            <div class="browser-image">
                                                <img src="assets/images/brower-image/firefox.png" class="img-fluid"
                                                    alt="">
                                                <h5>Firefox</h5>
                                            </div>

                                            <div class="browser-progressbar">
                                                <h6>48%</h6>
                                            </div>
                                        </li>
                                        <li class="brower-item">
                                            <div class="browser-image">
                                                <img src="assets/images/brower-image/internet-explorer.png"
                                                    class="img-fluid" alt="">
                                                <h5>internet Explorer</h5>
                                            </div>

                                            <div class="browser-progressbar">
                                                <h6>35%</h6>
                                            </div>
                                        </li>
                                        <li class="brower-item">
                                            <div class="browser-image">
                                                <img src="assets/images/brower-image/opera.png" class="img-fluid"
                                                    alt="">
                                                <h5>Opera Mini</h5>
                                            </div>

                                            <div class="browser-progressbar">
                                                <h6>55%</h6>
                                            </div>
                                        </li>
                                        <li class="brower-item">
                                            <div class="browser-image">
                                                <img src="assets/images/brower-image/safari.png" class="img-fluid"
                                                    alt="">
                                                <h5>Safari</h5>
                                            </div>

                                            <div class="browser-progressbar">
                                                <h6>20%</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Browser States end-->
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
<?php include '../views/admin/layout/footer.php' ?>