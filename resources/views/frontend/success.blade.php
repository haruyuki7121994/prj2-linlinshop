@extends('frontend.layout.master')
@section('content')
    <br>
    <section style="width: 1000px; margin: 0 auto">
        <div class="container-fluid">
            @if($order->payment_method == \App\Order::TRANSFER)
            <div class="row">
                <div class="col-12" style="color: red; font-weight: bolder">
                    Note: Thank {{$order->shipping_full_name}} for your order! <br>
                    For your order to be approved, please transfer to the following account: <br>
                    ATM: VCB Banking <br>
                    Number: 9999 9999 9999 9999 <br>
                    Thanks {{$order->shipping_full_name}} again! Best regard!
                </div>
            </div>
            <hr>
            @endif
            <div class="row">
                <div class="col-12">
                    <h3 style="color: red">Order: #{{$order->code}}</h3>
                </div>
                <div class="col-12">
                    Name: {{$order->shipping_full_name}}
                </div>
                <div class="col-12">
                    Phone: {{$order->shipping_mobile}}
                </div>
                <div class="col-12">
                    Address: {{$order->house_number_street}} - {{$order->province->name}}
                </div>
                <div class="col-12">
                    Status: <span class="badge badge-primary">{{\App\Order::LIST_STATUS[$order->status]}}</span>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Attributes</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->detail as $itm)
                    <tr>
                        <th scope="row">{{$itm->productAttr->product->name}}</th>
                        <td>
                            @if($itm->unit_price > $itm->real_price)
                                <del>${{$itm->unit_price}}</del>
                                <br>
                                <span style="color: red">${{$itm->real_price}}</span>
                            @else
                                ${{$itm->real_price}}
                            @endif
                        </td>
                        <td>{{$itm->qty}}</td>
                        <td>
                            Size: {{$itm->productAttr->size->name}}<br>
                            Color: {{$itm->productAttr->color->name}}
                        </td>
                        <td>${{$itm->total_price}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">
                            Subtotal
                        </td>
                        <td>${{$order->sub_total}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            Shipping
                        </td>
                        <td>${{$order->shipping_fee}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            Vat
                        </td>
                        <td>${{$order->vat}}</td>
                    </tr>
                    <tr>
                        <th colspan="4">Total</th>
                        <th>${{$order->total}}</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </section>
    <br>
@endsection
