@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Size" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div class="col-lg-4" style="margin-top: 20px"><a href="{{route('cms.size.create')}}"><button class="btn btn-primary">Create</button></a></div>

                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Size Table</h4>
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
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>S</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>M</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>L</td>
                                    <td>Inactive</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>XL</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>XXL</td>
                                    <td>Active</td>
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
