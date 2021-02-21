@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
                </div>
            </div>
        </div>
        <!-- /breadcrumb -->

        <!-- row -->
        <div class="row row-sm">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TODAY ORDERS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">10</h4>
                                </div>
                                <span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
											</span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TODAY EARNINGS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">$1,230.17</h4>
                                </div>
                                <span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
											</span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TOTAL EARNINGS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">$7,125.70</h4>
                                </div>
                                <span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
											</span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">PRODUCT SOLD</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">100</h4>
                                </div>
                                <span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
											</span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
            </div>
        </div>
        <!-- row closed -->

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Order status</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="total-revenue">
                            <div>
                                <h4>120,750</h4>
                                <label><span class="bg-primary"></span>success</label>
                            </div>
                            <div>
                                <h4>56,108</h4>
                                <label><span class="bg-danger"></span>Pending</label>
                            </div>
                            <div>
                                <h4>32,895</h4>
                                <label><span class="bg-warning"></span>Failed</label>
                            </div>
                        </div>
                        <div id="bar" class="sales-bar mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-xl-6 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header pb-1">
                        <h3 class="card-title mb-2">Recent Orders</h3>
                    </div>
                    <div class="card-body p-0 customers mt-1">
                        <div class="list-group list-lg-group list-group-flush">
                            <div class="list-group-item list-group-item-action" href="#">
                                <div class="media mt-0">
                                    <img class="avatar-lg rounded-circle mr-3 my-auto" src="{{asset('cms/assets/img/faces/1.jpg')}}" alt="Image description">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-0">
                                                <h5 class="mb-1 tx-15">User: Samantha Melon</h5>
                                                <p class="mb-0 tx-13 text-muted">Order Id: #1234 <span class="text-success ml-2">Paid</span></p>
                                            </div>
                                            <span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark1" class="wd-100p"></div>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action" href="#">
                                <div class="media mt-0">
                                    <img class="avatar-lg rounded-circle mr-3 my-auto" src="{{asset('cms/assets/img/faces/1.jpg')}}" alt="Image description">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-1">
                                                <h5 class="mb-1 tx-15">User: Jimmy Changa</h5>
                                                <p class="mb-0 tx-13 text-muted">Order Id: #1234 <span class="text-danger ml-2">Pending</span></p>
                                            </div>
                                            <span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark2" class="wd-100p"></div>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action" href="#">
                                <div class="media mt-0">
                                    <img class="avatar-lg rounded-circle mr-3 my-auto" src="{{asset('cms/assets/img/faces/1.jpg')}}" alt="Image description">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-1">
                                                <h5 class="mb-1 tx-15">User: Gabe Lackmen</h5>
                                                <p class="mb-0 tx-13 text-muted">Order Id: #1234<span class="text-danger ml-2">Pending</span></p>
                                            </div>
                                            <span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark3" class="wd-100p"></div>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action" href="#">
                                <div class="media mt-0">
                                    <img class="avatar-lg rounded-circle mr-3 my-auto" src="{{asset('cms/assets/img/faces/1.jpg')}}" alt="Image description">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-1">
                                                <h5 class="mb-1 tx-15">User: Manuel Labor</h5>
                                                <p class="mb-0 tx-13 text-muted">Order Id: #1234<span class="text-success ml-2">Paid</span></p>
                                            </div>
                                            <span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark4" class="wd-100p"></div>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
                                <div class="media mt-0">
                                    <img class="avatar-lg rounded-circle mr-3 my-auto" src="{{asset('cms/assets/img/faces/1.jpg')}}" alt="Image description">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-1">
                                                <h5 class="mb-1 tx-15">User: Sharon Needles</h5>
                                                <p class="b-0 tx-13 text-muted mb-0">Order Id: #1234<span class="text-success ml-2">Paid</span></p>
                                            </div>
                                            <span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark5" class="wd-100p"></div>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header pb-1">
                        <h3 class="card-title mb-2">Sales Activity</h3>
                    </div>
                    <div class="product-timeline card-body pt-2 mt-1">
                        <ul class="timeline-1 mb-0">
                            <li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Products</span> <a href="#" class="float-right tx-11 text-muted">3 days ago</a>
                                <p class="mb-0 text-muted tx-12">1.3k New Products</p>
                            </li>
                            <li class="mt-0"> <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Sales</span> <a href="#" class="float-right tx-11 text-muted">35 mins ago</a>
                                <p class="mb-0 text-muted tx-12">1k New Sales</p>
                            </li>
                            <li class="mt-0"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Revenue</span> <a href="#" class="float-right tx-11 text-muted">50 mins ago</a>
                                <p class="mb-0 text-muted tx-12">23.5K New Revenue</p>
                            </li>
                            <li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Profit</span> <a href="#" class="float-right tx-11 text-muted">1 hour ago</a>
                                <p class="mb-0 text-muted tx-12">3k New profit</p>
                            </li>
                            <li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Customer</span> <a href="#" class="float-right tx-11 text-muted">1 day ago</a>
                                <p class="mb-0 text-muted tx-12">1k Total Customer</p>
                            </li>
                            <li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Customer Reviews</span> <a href="#" class="float-right tx-11 text-muted">1 day ago</a>
                                <p class="mb-0 text-muted tx-12">1.5k reviews</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- row close -->
    </div>
    <!-- /Container -->
@endsection
