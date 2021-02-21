@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Promotion" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div class="col-lg-4" style="margin-top: 20px"><a href="{{route('cms.promotion.create')}}"><button class="btn btn-primary">Create</button></a></div>

                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Promotion Table</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Total Product</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Happy New Year</td>
                                    <td>2021/01/01</td>
                                    <td>2021/01/30</td>
                                    <td>20</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                        <a href="promotion_product.html"><button class="btn btn-primary" style="width: 50px"><i class="fa fa-plus"></i></button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Merry Christmas</td>
                                    <td>2021/12/01</td>
                                    <td>2021/12/31</td>
                                    <td>10</td>
                                    <td>Inactive</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-primary" style="width: 50px"><i class="fa fa-plus"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Sale Fall</td>
                                    <td>2021/11/01</td>
                                    <td>2021/11/30</td>
                                    <td>10</td>
                                    <td>Inactive</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-primary" style="width: 50px"><i class="fa fa-plus"></i></button>
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
