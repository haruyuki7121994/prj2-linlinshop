@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="User" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">User Table</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Total Order</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>joan_powell@gmail.com</td>
                                    <td>Joan Powell</td>
                                    <td>5</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>gavin_gibson@gmail.com</td>
                                    <td>Gavin Gibson</td>
                                    <td>0</td>
                                    <td>Inactive</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>julian_kerr@gmail.com</td>
                                    <td>Julian Kerr</td>
                                    <td>3</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>cedric_kelly@gmail.com</td>
                                    <td>Cedric Kelly</td>
                                    <td>0</td>
                                    <td>Inactive</td>
                                    <td>
                                        <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>samantha_may@gmail.com</td>
                                    <td>Samantha May</td>
                                    <td>0</td>
                                    <td>Inactive</td>
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
