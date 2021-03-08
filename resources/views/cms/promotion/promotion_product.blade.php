@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Promotion" action="Product" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">List Product of Promotion</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" >

                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{$promotion->name}}" disabled>
                            </div>
                            <div class="row row-sm" style="margin-bottom: 15px">

                                <div class="input-group col-md-12">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            From Date:
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" value="{{$promotion->from_date}}" disabled>
                                </div>
                            </div>

                            <div class="row row-sm" style="margin-bottom: 15px">
                                <div class="input-group col-md-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            To Date:
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" value="{{$promotion->end_date}}" type="text" disabled>
                                </div>
                            </div>

                            <div class="row row-sm">
                                <div class="col-lg">
                                    <a class="btn btn-success" data-target="#modaldemo1" data-toggle="modal" href="">Add Product</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mg-b-0 text-md-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Percentage</th>
                                            <th>Active</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($promotionProducts as $product)
                                        <tr>
                                            <td>{{$product->product->name}}</td>
                                            <td>{{$promotion->percentage}}%</td>
                                            <td>
                                                <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- bd -->
                            </div><!-- bd -->


                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
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
    <x-add-promotion-product :products="$notPromotionProducts" :promotion="$promotion"></x-add-promotion-product>
@endsection
