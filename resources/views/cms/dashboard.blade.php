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
            <?php
            $data = [
                [$totalOrder, 'TOTAL ORDER', 'primary', ''],
                ['$'.number_format($totalAmount), 'TOTAL EARNINGS', 'danger', 2],
                [$totalUser, 'TOTAL USERS', 'success', 3],
                [$totalSoldProduct, 'PRODUCT SOLD', 'warning', 4],
            ]
            ?>
            @foreach($data as $itm)
            <x-dashboard-summary-card :value="$itm[0]" :name="$itm[1]" :type="$itm[2]" :index="$itm[3]"></x-dashboard-summary-card>
            @endforeach
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
                                <label><span class="bg-primary"></span>Success</label>
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
                            <?php $idx = 1 ?>
                        @foreach($recentOrders as $order)
                            <div class="list-group-item list-group-item-action" href="#">
                                <div class="media mt-0">
                                    <img class="avatar-lg rounded-circle mr-3 my-auto" src="{{asset('cms/assets/img/faces/1.jpg')}}" alt="Image description">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-0">
                                                <h5 class="mb-1 tx-15">User: {{$order->user->name}}</h5>
                                                <p class="mb-0 tx-13 text-muted">Order Id: #{{$order->code}} <span class="{{$order->status == \App\Order::FAIL ? 'text-danger' : 'text-success'}} ml-2">{{\App\Order::LIST_STATUS[$order->status]}}</span></p>
                                            </div>
                                            <span class="ml-auto wd-45p fs-16 mt-2">
                                                        <div id="spark{{$idx}}" class="wd-100p"></div>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $idx++ ?>
                        @endforeach
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
                            <li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Products</span> <a href="{{route('cms.product.index')}}" class="float-right tx-11 text-muted">View more</a>
                                <p class="mb-0 text-muted tx-12">{{$totalProduct}} Products</p>
                            </li>
                            <li class="mt-0"> <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Promotion</span> <a href="{{route('cms.promotion.index')}}" class="float-right tx-11 text-muted">View more</a>
                                <p class="mb-0 text-muted tx-12">{{$totalPromotion}} Promotions</p>
                            </li>
                            <li class="mt-0"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Revenue</span> <a href="{{route('cms.order.index')}}" class="float-right tx-11 text-muted">View more</a>
                                <p class="mb-0 text-muted tx-12">23.5K New Revenue</p>
                            </li>
                            <li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Customer</span> <a href="{{route('cms.user.index')}}" class="float-right tx-11 text-muted">View more</a>
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
