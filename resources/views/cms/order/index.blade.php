@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Order" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div class="col-lg-4" style="margin-top: 20px"><a href="order_detail.html"><button class="btn btn-primary">Create</button></a></div>

                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Order Table</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Order Code</th>
                                    <th>User</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>#000001</td>
                                    <td>Petey Cruiser</td>
                                    <td>20$</td>
                                    <td>Paid</td>
                                    <td>
                                        <a href="invoice.html"><button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button></a>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>#000002</td>
                                    <td>Petey Cruiser</td>
                                    <td>40$</td>
                                    <td>Pending</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>#000003</td>
                                    <td>Petey Cruiser</td>
                                    <td>50$</td>
                                    <td>Pre-Pending</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>#000004</td>
                                    <td>Petey Cruiser</td>
                                    <td>60$</td>
                                    <td>Delivery</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>#000005</td>
                                    <td>Petey Cruiser</td>
                                    <td>20$</td>
                                    <td>Paid</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- bd -->
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
@endsection
