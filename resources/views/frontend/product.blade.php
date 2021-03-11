@extends('frontend.layout.master')
@push('custom-css')
    <style>
        .error-msg {color: red; font-size: 14px; display: none}
    </style>
@endpush
@section('content')
<section>
    <div class="container">
        <br>
        <div style="background-color: white; padding: 0.5em; border-radius: 1em; width: 50%; display: block; margin: auto; ">
            <h1 style="text-align: center;font-weight: bolder; font-size: 2em;">PRODUCT DETAIL</h1>
        </div>
        <br>


        <div class="col-md-12 col-sm-auto">
            <div class="row">
                <div class="col-md-6">
                    <div class="borderhinhanh">
                        <div class="row">
                            <div class="col-md-12">
                                <img id="main-image" src="{{$productAttrs->first()->images ? $productAttrs->first()->images->url : ''}}"
                                     style="padding-left: 0.2em; padding-top: 0.2em; padding-bottom: 0.2em; width: 100%"
                                     alt="" />
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-sm-auto">
                    <div style=" border: solid; padding: 0.5em; background-color: whitesmoke;">
                        <h2 style="color: black;">{{$product->name}} </h2>
                        <div class="product-single__rating">
                            <a href="#reviews">
                                <span style="color:orange; font-size: 1em;">5/5 <i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i></span>
                            </a>
                        </div>

                        <div class="price">
                            @php $salePrice = $productAttrs->first()->getPromotionPrice() @endphp
                            <p>Price: @if($salePrice) <span style="color: red">${{$salePrice}} (-{{$productAttrs->first()->promotion->percentage}}%)</span> @else ${{$productAttrs->first()->price}} @endif</p>
                        </div>


                        <div class="color">
                            <h4 style="font-weight: bolder;">Color <span class="error-msg">Please choose color !</span></h4>
                            @php $current = [] @endphp
                            @foreach($productAttrs as $attr)
                                @if(!in_array($attr->color_name, $current))
                                <button data-color-id="{{$attr->color_id}}" style="background-color: {{$attr->color_code}}; color: {{$attr->color_name == 'Black' ? 'white' : 'black'}};" class="productcolor">
                                    {{$attr->color_name}}
                                </button>
                                @endif
                                @php $current[] = $attr->color_name @endphp
                            @endforeach
                        </div>



                        <div class="size">
                            <h4 style="font-weight: bolder;">Size <span class="error-msg">Please choose size !</span></h4>

                            @foreach($productAttrs as $attr)
                                @if(!in_array($attr->size_name, $current))
                                <button data-size-id="{{$attr->size_id}}" class="productsize">{{$attr->size_name}}</button>
                                @endif
                                    @php $current[] = $attr->size_name @endphp
                            @endforeach

                        </div>
                        <br>
                        <div class="soluongsp">
                            <div><button style="width: 10%; background-color:black; color: white;" id="btn-plus" class="soluong">+</button>
                                <input id="input-qty"
                                    style="width: 40px; text-align: center; border: none; " type="text" value="1" min="1" data-qty>
                                <button id="btn-minus"
                                    class="soluong" style="width: 10%;  background-color: black; color: whitesmoke;">-</button></div>
                        </div>
                        <br>
                        <div class="giohang">
                            <button class="add" id="btn-cart">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="col-md-12">
            <div style="border: solid; padding: 1em; background-color: whitesmoke;">
                <h3>Product Description</h3>
                <p>

                    {{$product->description}}
                </p>
            </div>
        </div>

        <br>

        <div class="col-md-12">
            <div style="border: solid; padding: 1em; background-color: whitesmoke;">
                <h3>Product reviews: </h3>
                <div class="danhgia">
                    <!--show comment-->
                    @foreach($comments as $comment)
                    <p>
                        <strong>{{$comment->user->name}}</strong><br>
                        <span style="color:orange; font-size: 1em;">5/5 <i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i></span>
                        <br>
                            {{$comment->description}}
                        
                        
                    </p>
                    @endforeach

                    <!--add comment-->
                    @if(Auth::check())
                    <div class="form-group">
                        @include('cms.layout.message')
                        <form method="post" action="{{route('frontend.comment')}}">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                            <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            <br>
                            <input name="cmt" type="submit" value="Comment" class="btn btn-danger">
                        </form>
                    </div>
                    @else
                        <a href="{{route('auth.login.index')}}">Please login to comment!</a>
                    @endif
                </div>

            </div>
        </div>
        <br>
        <div class="col-md-12">
            <div style="background-color: black; padding: 0.5em;width: 300px; display: block; margin: left; ">
                <h2 style=" text-align: center; color: white;">
                    Other products</h2>

            </div>

            <div class="sanpham" style="border: solid; padding: 1em;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="reddress2.html"><img class="imgbando" src="redfress/vaydo2.jpg"
                                                                      alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="reddress2.html"><img class="imgbando" src="redfress/vaydo2,1.jpg"
                                                                      alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="reddress2.html"><img class="imgbando" src="redfress/vaydo2,2.jpg"
                                                                      alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="reddress2.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder;color: white;">Red dress hugging</h6>
                            </a>

                            <h6 style="text-align: center; color:white; font-weight: bolder;">Price: 120$ </h6>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="Setoftshirtsandjeansskirts.html"><img class="imgbando" src="setdo/setdo2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="Setoftshirtsandjeansskirts.html"><img class="imgbando" src="setdo/setdo2,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="Setoftshirtsandjeansskirts.html"><img class="imgbando" src="setdo/setdo2,3.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="Setoftshirtsandjeansskirts.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder;color: white;">
                                    Set of t-shirts and jeans skirts</h6>
                            </a>

                            <h6 style="text-align: center;color: white; font-weight: bolder;">Price: 120$ </h6>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="Setofclotheswith whiteclothes.html"><img class="imgbando" src="setdo/setdo3.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="Setofclotheswith whiteclothes.html"><img class="imgbando" src="setdo/setdo3,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="Setofclotheswith whiteclothes.html"><img class="imgbando" src="setdo/setdo3,3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="Setofclotheswith whiteclothes.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder;color: white;">Set of clothes with white
                                    clothes</h6>
                            </a>

                            <h6 style="text-align: center;color: white; font-weight: bolder;">Price: 120$ </h6>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="whitedress1.html"><img class="imgbando" src="vaytrang/vaytrang2,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="whitedress1.html"><img class="imgbando" src="vaytrang/vaytrang2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="whitedress1.html"><img class="imgbando" src="vaytrang/vaytrang2,2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="whitedress1.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder;color: white;">White dress</h6>
                            </a>
                            <h6 style="text-align: center;color: white; font-weight: bolder;">Price: 130$ </h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
    </div>
</section>
@endsection
@push('custom-js')
    <script>
        let listProduct = {!! $productAttrs !!}
        let selected = {
            'product-id': '{{$product->id}}'
        }
        selected.qty = parseInt($('#input-qty').val())
        $(document).ready(function () {
            selectAttr($('.productcolor'), 'color-id')
            selectAttr($('.productsize'), 'size-id')

            addQty($('#btn-plus'), 'plus')
            addQty($('#btn-minus'), 'minus')

            addToCart($('#btn-cart'))
        });

        function selectAttr(ele, name) {
            ele.click(function () {
                ele.each(function () {
                    $(this).css('border', 'none')
                })
                $(this).css('border', '2px solid black')
                selected[name] = $(this).data(name)
                let productSelect = listProduct.find(itm => itm.product_id === parseInt(selected['product-id']) && itm.color_id === selected['color-id'] && itm.size_id === selected['size-id'])
                if (productSelect !== undefined) $('#main-image').attr('src', productSelect.images.url)
            })
        }

        function addQty(ele, operator) {
            ele.click(function () {
                let old = parseInt($('#input-qty').val())
                let qty = operator === 'plus' ? ++old : --old
                if (old >= 1) {
                    $('#input-qty').val(qty)
                    selected.qty = qty
                }
            })
        }

        function addToCart(ele) {
            ele.click(function () {
                let attr = [selected['qty'], selected['size-id'], selected['color-id'], selected['product-id']]
                if (attr.some(ele => ele === undefined)) $('.error-msg').show()
                else {
                    $('.error-msg').hide()
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token()}}'
                        }
                    });
                    $.ajax({
                        method: "POST",
                        url: '{{route('frontend.cart.add')}}',
                        data: selected
                    })
                    .done(function( msg ) {
                        if (msg.stt === 'success') $('#my-cart').html(`<i style="color: white;" class="fa fa-shopping-bag"></i> (${msg.msg})`)
                        else console.log(msg.msg)
                    });
                }
            })
        }
    </script>
@endpush
