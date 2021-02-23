@foreach($itms as $itm)
    <div class="{{$class}}">
        <div class="bordershopping" style="overflow: auto;">
            <div id="carousel" class="carousel-fade " data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">

                        <a href="{{route('frontend.product', $itm->product->slug)}}"><img class="imgbando"
                                                              src="/asset/images/frontend/redfress/vaydo1.jpg" alt=""></a>


                    </div>
                    <div class="carousel-item">
                        <a href="{{route('frontend.product', $itm->product->slug)}}"><img class="imgbando"
                                                              src="/asset/images/frontend/ao/ao1.jpg" alt=""></a>
                    </div>
                    <div class="carousel-item">
                        <a href="{{route('frontend.product', $itm->product->slug)}}"><img class="imgbando"
                                                              src="/asset/images/frontend/ao/ao2.jpg" alt=""></a>
                    </div>
                </div>

            </div>
            <br>
            <a href="{{route('frontend.product', $itm->product->slug)}}" class="abanhang">
                <h6 style="text-align: center; font-weight: bolder; color: white;">{{$itm->product->name}}</h6>
            </a>

            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: {{$itm->price}}$ </h6>

        </div>
        <br>
    </div>
@endforeach
