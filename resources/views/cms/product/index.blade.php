@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Product" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div class="col-lg-4" style="margin-top: 20px"><a href="{{route('cms.product.create')}}"><button class="btn btn-primary">Create</button></a></div>

                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Product Table</h4>
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
                                    <th>Category</th>
                                    <th>Qty</th>
                                    <th>Featured</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>T-Shirt 1</td>
                                    <td>T-Shirt</td>
                                    <td>15</td>
                                    <td>Yes</td>
                                    <td>Active</td>
                                    <td><img src="https://via.placeholder.com/150" alt=""></td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>T-Shirt 2</td>
                                    <td>T-Shirt</td>
                                    <td>30</td>
                                    <td>Yes</td>
                                    <td>Active</td>
                                    <td><img src="https://via.placeholder.com/150" alt=""></td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>T-Shirt 3</td>
                                    <td>T-Shirt</td>
                                    <td>2</td>
                                    <td>Yes</td>
                                    <td>Inactive</td>
                                    <td><img src="https://via.placeholder.com/150" alt=""></td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Shirt 1</td>
                                    <td>Shirt</td>
                                    <td>10</td>
                                    <td>Yes</td>
                                    <td>Active</td>
                                    <td><img src="https://via.placeholder.com/150" alt=""></td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Shirt 2</td>
                                    <td>Shirt</td>
                                    <td>20</td>
                                    <td>Yes</td>
                                    <td>Active</td>
                                    <td><img src="https://via.placeholder.com/150" alt=""></td>
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
