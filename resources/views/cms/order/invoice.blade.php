@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <x-breadcrumb category="Order" action="Invoice" />
        <!-- breadcrumb -->

        <!-- row -->
        <div class="row row-sm">
            <div class="col-md-12 col-xl-12">
                <div class=" main-content-body-invoice">
                    <div class="card card-invoice">
                        <div class="card-body">
                            <div class="invoice-header">
                                <h1 class="invoice-title">Invoice</h1>
                                <div class="billed-from">
                                    <h6>Linlin Shop.</h6>
                                    <p>20 STREET 1B AN LAC WARD, BINH TAN DISTRICT, HO CHI MINH CITY<br>
                                        Tel No: 0927110910<br>
                                        Email: linlinshop@gmail.com</p>
                                </div><!-- billed-from -->
                            </div><!-- invoice-header -->
                            <div class="row mg-t-20">
                                <div class="col-md">
                                    <label class="tx-gray-600">Billed To</label>
                                    @if($order->user)
                                    <div class="billed-to">
                                        <h6>{{$order->user->name}}</h6>
                                        <p>{{$order->user->address}}<br>
                                            Tel No: {{$order->user->mobile}}<br>
                                            Email: {{$order->user->email}}</p>
                                    </div>
                                    @else
                                    <div class="billed-to">
                                        <h6>Guest</h6>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md">
                                    <label class="tx-gray-600">Invoice Information</label>
                                    <p class="invoice-info-row"><span>Invoice No</span> <span>#{{$order->code}}</span></p>
                                    <p class="invoice-info-row"><span>Created Date:</span> <span>{{$order->created_at->format('Y-M-d')}}</span></p>
                                    <p class="invoice-info-row"><span>Status:</span> <span>{{\App\Order::LIST_STATUS[$order->status]}}</span></p>
                                    <p class="invoice-info-row"><span>Payment Method:</span> <span>{{\App\Order::LIST_METHOD[$order->payment_method]}}</span></p>
                                    <p class="invoice-info-row"><span>Fullname:</span> <span>{{$order->shipping_full_name}}</span></p>
                                    <p class="invoice-info-row"><span>Address:</span> <span>{{$order->house_number_street}}, {{$order->province->name}}</span></p>
                                    <p class="invoice-info-row"><span>Mobile:</span> <span>{{$order->shipping_mobile}}</span></p>

                                </div>
                            </div>
                            @php $detail = $order->detail @endphp
                            <div class="table-responsive mg-t-40">
                                <table class="table table-invoice border text-md-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th class="wd-20p">Product</th>
                                        <th class="wd-40p">Description</th>
                                        <th class="tx-center">QTY</th>
                                        <th class="tx-right">Unit Price</th>
                                        <th class="tx-right">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($detail as $itm)
                                        @php $attr = $itm->productAttr @endphp
                                    <tr>
                                        <td>{{$attr->product->name}} ({{$attr->size->name}}-{{$attr->color->name}})</td>
                                        <td class="tx-12">{{$attr->product->description}}</td>
                                        <td class="tx-center">{{$itm->qty}}</td>
                                        @php $realPrice = $attr->getPromotionPrice() @endphp
                                        <td class="tx-right">
                                            @if($realPrice)
                                            ${{$realPrice}} <br>
                                            <del>${{$itm->unit_price}}</del>
                                            @else
                                                ${{$itm->unit_price}}
                                            @endif
                                        </td>
                                        <td class="tx-right">${{$itm->real_price}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td class="valign-middle" colspan="2" rowspan="5">
                                            <div class="invoice-notes">
                                                <label class="main-content-label tx-13">Notes</label>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                            </div><!-- invoice-notes -->
                                        </td>
                                        <td class="tx-right">Sub-Total</td>
                                        <td class="tx-right" colspan="2">${{$order->sub_total}}</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-right">Tax (10%)</td>
                                        <td class="tx-right" colspan="2">${{$order->vat}}</td>
                                    </tr>
{{--                                    <tr>--}}
{{--                                        <td class="tx-right">Discount</td>--}}
{{--                                        <td class="tx-right" colspan="2">-$40</td>--}}
{{--                                    </tr>--}}
                                    <tr>
                                        <td class="tx-right">Shipping Fee</td>
                                        <td class="tx-right" colspan="2">${{$order->shipping_fee}}</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                                        <td class="tx-right" colspan="2">
                                            <h4 class="tx-primary tx-bold">${{$order->total}}</h4>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr class="">
                            @switch($order->status)
                                @case(0)
                                <button form="stt-form" name="action" value="1" class="btn btn-purple float-right mt-3 ml-2" type="submit"><i class="mdi mdi-currency-usd mr-1"></i>Approve</button>
                                @break

                                @case(1)
                                <button form="stt-form" name="action" value="3" class="btn btn-danger float-right mt-3 ml-2" type="submit"><i class="mdi mdi-message-alert mr-1"></i>Fail</button>
                                <button form="stt-form" name="action" value="2" class="btn btn-success float-right mt-3 ml-2" type="submit"><i class="mdi mdi-check-circle mr-1"></i>Success</button>
                                @break

                            @endswitch
                            <form id="stt-form" action="{{route('cms.order.update', $order->id)}}" method="post">
                                @method('PUT')
                                @csrf
                                <input type="hidden" value="{{$order->status}}" name="status">
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- COL-END -->
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
@endsection
