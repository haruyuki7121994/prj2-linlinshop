@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Product" action="Create" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Create New Product</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" >

                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Select Category</option>
                                    <option value="">Shirt</option>
                                    <option value="">T-Shirt</option>
                                    <option value="">Trouser</option>
                                    <option value="">Jacket</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="note" placeholder="Note" cols="10"></textarea>
                            </div>
                            <div class="form-group mb-15 justify-content-end">
                                <label for="inputName">Status: </label>
                                <div class="main-toggle main-toggle-secondary on">
                                    <span></span>
                                </div>
                            </div>

                            <div class="row row-sm">
                                <div class="col-lg">
                                    <button class="btn btn-success">Add Attribute</button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mg-b-0 text-md-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Active</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>S</td>
                                            <td>Red</td>
                                            <td>5</td>
                                            <td>5$</td>
                                            <td>
                                                <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>S</td>
                                            <td>Blue</td>
                                            <td>3</td>
                                            <td>10$</td>
                                            <td>
                                                <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>M</td>
                                            <td>Green</td>
                                            <td>5</td>
                                            <td>15$</td>
                                            <td>
                                                <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- bd -->
                            </div><!-- bd -->

                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="submit" class="btn btn-secondary">Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- Container closed -->
@endsection
