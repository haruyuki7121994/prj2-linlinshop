@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Order" action="Detail" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Create new order</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" >

                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Select Customer</option>
                                    <option value="">a</option>
                                    <option value="">b</option>
                                    <option value="">c</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Select Payment Method</option>
                                    <option value="">COD</option>
                                    <option value="">Transfer</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Select Province</option>
                                    <option value="">New York</option>
                                    <option value="">California</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Address" class="form-control">
                            </div>

                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="">Ordered</option>
                                    <option value="">Approved</option>
                                    <option value="">Delivery</option>
                                    <option value="">Paid</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Discount" class="form-control">
                            </div>

                            <div class="row row-sm">
                                <div class="col-lg">
                                    <button class="btn btn-success">Add Product</button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mg-b-0 text-md-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Active</th>
                                            <th>ID</th>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Unit Price</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                            </td>
                                            <th scope="row">1</th>
                                            <td>Shirt 1 (XL-Red)</td>
                                            <td>1</td>
                                            <td>20$</td>
                                            <td>20$</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                            </td>
                                            <th scope="row">2</th>
                                            <td>Shirt 2 (L-Black)</td>
                                            <td>2</td>
                                            <td>30$</td>
                                            <td>60$</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                            </td>
                                            <th scope="row">3</th>
                                            <td>Shirt 3 (L-White)</td>
                                            <td>4</td>
                                            <td>20$</td>
                                            <td>80$</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="3" rowspan="5">
                                                <div class="invoice-notes">
                                                    <label class="main-content-label tx-13">Notes</label>
                                                </div><!-- invoice-notes -->
                                            </td>
                                            <td class="tx-right">Sub-Total</td>
                                            <td class="tx-right" colspan="2">$320</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-right">Tax (10%)</td>
                                            <td class="tx-right" colspan="2">$32</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-right">Discount</td>
                                            <td class="tx-right" colspan="2">-$40</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-right">Shipping Fee</td>
                                            <td class="tx-right" colspan="2">$3</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                                            <td class="tx-right" colspan="2">
                                                <h4 class="tx-primary tx-bold">$325</h4>
                                            </td>
                                        </tr>
                                        </tfoot>
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
