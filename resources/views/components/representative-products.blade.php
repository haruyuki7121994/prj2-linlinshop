@foreach($itms as $itm)
    <div class="{{$class}}">
        <div class="bordershopping" style="overflow: auto;">
            <div id="carousel" class="carousel-fade " data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <a href="{{route('frontend.product', $itm->product->slug)}}">
                            <img class="imgbando"
                                 src="{{$itm->images ? $itm->images->url : ''}}"
                                 alt="">
                        </a>
                    </div>
                </div>
            </div>
            <br>
            <a href="{{route('frontend.product', $itm->product->slug)}}" class="abanhang">
                <h6 style="text-align: center; font-weight: bolder; color: white;">{{$itm->product->name}}</h6>
            </a>
            @php $salePrice = $itm->getPromotionPrice() @endphp
            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: @if($salePrice) <span style="color: red">{{'$' . $salePrice}} (-{{$itm->promotion->percentage}}%)</span> @else ${{$itm->price}} @endif </h6>
        </div>
        <br>
    </div>
@endforeach
