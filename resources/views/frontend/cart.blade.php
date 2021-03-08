@extends('frontend.layout.master')
@section('content')
    <br>
    <section>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="thongtin" style="background-color: whitesmoke; padding: 1em;">
                            <fieldset>
                                @include('cms.layout.message')
                                <form action="{{route('frontend.order.handle')}}" method="post">
                                    @csrf
                                    <h1>Delivery information</h1>
                                    @if(!Auth::check())
                                    <legend style="font-size: 0.8em;">You already have an account to log in now ? <a
                                            style="text-decoration: none; color: orange;" href="{{route('auth.login.index')}}">Login</a></legend>
                                    @else
                                        @php $user = Auth::user() @endphp
                                    @endif
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-control" value="{{old('shipping_full_name', $user->name ?? '')}}" type="text" name="shipping_full_name" id="name" placeholder="Name" required>
                                        </div>
                                        <div class="col">
                                            <input class="form-control" value="{{old('shipping_mobile', $user->mobile ?? '')}}" type="tel" name="shipping_mobile" id="phone" placeholder="Phone" required>
                                        </div>

                                    </div>
                                    <br>
                                    <input type="email" name="email" value="{{old('name', $user->name ?? '')}}" id="email" placeholder="Email" class="form-control" required><br>
                                    <select name="province_id" class="form-control" id="province">
                                        <option value="">Select province / city</option>
                                        @foreach($provinces as $province)
                                            <option {{old('province_id', $user->province_id ?? '') == $province->id ? 'selected' : ''}} value="{{$province->id}}">{{$province->name}}</option>
                                        @endforeach
                                    </select><br>
                                    <input type="text" value="{{old('house_number_street', $user->address ?? '')}}" name="house_number_street" id="address" placeholder="Address" class="form-control" required><br>
                                    <input type="text" name="note" id="note" placeholder="Note" class="form-control"> <br>

                                    <div class="hinhthucthanhtoan">
                                        <h1>Payment method</h1>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method" value="cod" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <i class="fas fa-truck"></i>
                                                COD (
                                                Payment on delivery)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method" value="transfer" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                <i class="far fa-credit-card"></i>
                                                Pay by credit card
                                            </label>
                                        </div>
                                    </div><br>
                                    <input type="submit" name="submit" id="submit" value="Order"  class="form-control" style="background-color:tomato; font-size: 1em;color:white;"><br>
                                </form>
                            </fieldset>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="giohang" style="background-color: whitesmoke; padding: 1em;">
                            <div>
                                <h1 style="text-align: center;">Your cart</h1>
                                <hr>
                            </div>
                            @foreach($cartItems as $itm)
                            <div class="row" id="item-{{$itm->id}}">
                                <div class="col">
                                    <img src="{{$itm->attributes->image}}" alt="" class="imggiohang">
                                </div>

                                <div class="col">
                                    <div style="background-color: white; padding: 5px; height: 100%">
                                        <a style="font-size: 20px" href="{{route('frontend.product', $itm->attributes->slug)}}"><div>{{Str::limit($itm->name, 10, $end='...')}}</div></a>
                                        <label style="font-weight: bolder;">Color: </label> {{$itm->attributes->color}} <br>
                                        <label style="font-weight: bolder;">Size: </label> {{$itm->attributes->size}} <br>
                                        <label style="font-weight: bolder;">Price: </label> {{$itm->price}}$ <br>
                                        <div class="soluongsp">
                                            <div>
                                                <button data-id="{{$itm->id}}" style="width: 15%; background-color:black; color: white;" class="soluong btn-plus">+</button>
                                                <span style="margin: 0 10px">{{$itm->quantity}}</span>
                                                <button data-id="{{$itm->id}}" class="soluong btn-minus" style="width: 15%;  background-color: black; color: whitesmoke;">-</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                            <br>
                            @endforeach

                            <div class="tinhtien" style="background-color: white; padding: 10px">
                                <div class="row">
                                    <div class="col">
                                        <label for="" style="font-weight: bolder;">Subtotal: </label>
                                    </div>
                                    <div class="col">
                                        <span id="subtotal"></span>$
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" style="font-weight: bolder;">
                                            Vat: </label>
                                    </div>
                                    <div class="col">
                                        <span style="color: tomato;">10%</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" style="font-weight: bolder;">
                                            Shipping: </label>
                                    </div>
                                    <div class="col">
                                        <span id="shipping" style="color: tomato;"></span><span style="color: red">$</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" style="font-weight: bolder;">Total: </label>
                                    </div>
                                    <div class="col">
                                        <span id="total" style="color: tomato;"></span><span style="color: red">$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    @push('custom-js')
        <script>
            $( document ).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    }
                });
                let cart = {!! $cartItems !!};
                const vat = 10/100;
                let subTotal = 0;
                let shipping = 0;
                getTransport({'province': $('#province').val()})
                showCart(cart)
                addQty($('.btn-plus'), 'plus')
                addQty($('.btn-minus'), 'minus')

                $('#province').click(function () {
                    let val = $(this).val()
                    getTransport({'province': val})
                })

                function resetVar() {
                    subTotal = 0;
                }

                function calTotalCart() {
                    let vatVal = subTotal * vat
                    $('#total').html(subTotal + vatVal + shipping)
                }

                function showCart(itm) {
                    for (const [key, value] of Object.entries(itm)) {
                        subTotal += itm[key]['price'] * itm[key]['quantity']
                    }
                    $('#subtotal').html(subTotal)
                    $('#shipping').html(shipping)
                    calTotalCart()
                }

                function addQty(ele, operator) {
                    ele.click(function () {
                        const id = $(this).data('id');
                        let selector = operator === 'plus' ? $(this).next() : $(this).prev()
                        let old = parseInt(selector.html())
                        let qty = operator === 'plus' ? 1 : -1;
                        if (old === 1 && qty === -1) {
                            $(`#item-${id}`).remove()
                            addToCart({'qty': qty, 'id': id, 'action': 'remove'})
                        }
                        else {
                            selector.html(old + qty)
                            addToCart({'qty': qty, 'id': id, 'action': 'update'})
                        }
                    })
                }

                function addToCart(data) {
                    $.ajax({
                        method: "POST",
                        url: '{{route('frontend.cart.update')}}',
                        data: data
                    })
                        .done(function( msg ) {
                            if (msg.stt === 'success') {
                                if (msg.msg.cart.length === 0) window.location.href = '{{route('frontend.home')}}'
                                resetVar()
                                showCart(msg.msg.cart)
                                $('#total-cart').html(msg.msg.total)
                            }
                        });
                }

                function getTransport(data) {
                    $.ajax({
                        method: "POST",
                        url: '{{route('frontend.transport.get')}}',
                        data: data
                    })
                        .done(function( msg ) {
                            if (msg.stt === 'success') {
                                shipping = msg.msg
                                $('#shipping').html(msg.msg)
                                calTotalCart()
                            }
                        });
                }
            });
        </script>
    @endpush
@endsection
