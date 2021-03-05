@extends('frontend.layout.master')
@section('content')
<section>
    <div class="container">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <marquee style="color: black; background-color:white; margin: auto; border-radius: 1em;">- - - - Welcome
                to our store. Wish
                you have a happy and happy shopping day. Thank you
                - - - - </marquee>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div style="display: block; background-color: black; padding: 0.5em;">
                <h1 style="text-align: center; font-size: 2em; color: white;">FEATURED PRODUCTS</h1>
            </div>
            <br>
            <div class="bordercaro">
                <div id="carousel" class="carousel slide " data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach($featuredProducts as $featured)
                            <div class="carousel-item {{$loop->first ? 'active': ''}}">
                                <div class="row">
                                    <div class="col-5">
                                        <a style="width: 60px;height: 50px; margin: auto; "
                                           class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                            <span style="background-color: black; width: 30px; height: 40px;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>

                                        <a href="{{route('frontend.product', $featured->product->slug)}}">
                                            <img class="imgcaro"
                                                 src="{{$featured->images ? $featured->images->url : ''}}" alt="">
                                        </a>

                                        <a style="width: 60px; height: 50px; margin: auto;"
                                           class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                            <span style="background-color: black; width: 30px; height: 40px;" class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <div style="  padding: 3em; background-color: whitesmoke;">
                                            <h1 style="color: black; font-weight: bolder;">{{Str::limit($featured->product->name, 20, '...')}}</h1>
                                            <div class="product-single__rating">
                                                <a href="#reviews">
                                                    <span style="color:orange; font-size: 2em;">5/5 <i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i></span>
                                                </a>
                                            </div>

                                            <div class="price">
                                                <p style="font-size: 2em;">Price: ${{$featured->price}}</p>
                                            </div>

                                            <div style="background-color: whitesmoke;">
                                                <h3>Product Description</h3>
                                                <p>
                                                    {{Str::limit($featured->product->description, 250, '...')}}
                                                </p>
                                            </div>
                                            <br><br>
                                            <div class="giohang">
                                                <a href="{{route('frontend.product', $featured->product->slug)}}"><button style="font-size: 1.5em; font-weight: bolder;" class="view">VIEWS PRODUCT</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <br><br>
                    <ol class="carousel-indicators">
                        <li style="background-color: black;" data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li style="background-color: black;" data-target="#carouselId" data-slide-to="1"></li>
                        <li style="background-color: black;" data-target="#carouselId" data-slide-to="2"></li>
                        <li style="background-color: black;" data-target="#carouselId" data-slide-to="3"></li>
                    </ol>
                </div>

            </div>
        </div>




        <div class="sanpham">
            <br>
            <div class="col-md-12">
                <div style="background-color: black;">
                    <h1
                        style="text-align: center; font-size: 2em;font-weight: bolder; color: white; padding: 0.5em;">
                        SALE OFF
                    </h1>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="quan ao/reddress1.html"><img class="imgbando"
                                                                              src="/asset/images/frontend/redfress/vaydo1.jpg" alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/reddress1.html"><img class="imgbando"
                                                                              src="quan ao/redfress/vaydo1,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/reddress1.html"><img class="imgbando"
                                                                              src="quan ao/redfress/vaydo1,3.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="quan ao/reddress1.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">Red dress</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 120$ </h6>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="quan ao/Setoftshirtsandjeansskirts.html"><img class="imgbando"
                                                                                               src="quan ao/setdo/setdo2.jpg" alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Setoftshirtsandjeansskirts.html"><img class="imgbando"
                                                                                               src="quan ao/setdo/setdo2,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Setoftshirtsandjeansskirts.html"><img class="imgbando"
                                                                                               src="quan ao/setdo/setdo2,3.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="quan ao/Setoftshirtsandjeansskirts.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">
                                    Set of t-shirts and jeans skirts</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 120$ </h6>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="quan ao/Setofclotheswith whiteclothes.html"><img class="imgbando"
                                                                                                  src="quan ao/setdo/setdo3.jpg" alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Setofclotheswith whiteclothes.html"><img class="imgbando"
                                                                                                  src="quan ao/setdo/setdo3,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Setofclotheswith whiteclothes.html"><img class="imgbando"
                                                                                                  src="quan ao/setdo/setdo3,3.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="quan ao/Setofclotheswith whiteclothes.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">Set of clothes
                                    with white
                                    clothes</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 120$ </h6>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="quan ao/whitedress1.html"><img class="imgbando"
                                                                                src="quan ao/vaytrang/vaytrang2,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/whitedress1.html"><img class="imgbando"
                                                                                src="quan ao/vaytrang/vaytrang2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/whitedress1.html"><img class="imgbando"
                                                                                src="quan ao/vaytrang/vaytrang2,2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="quan ao/whitedress1.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">White dress</h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 130$ </h6>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="tuixach/whitebeadedhandbag.html"><img class="imgbando"
                                                                                       src="tuixach/tuisach1.jpg" alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="tuixach/whitebeadedhandbag.html"><img class="imgbando"
                                                                                       src="tuixach/tuisach1,2.jpg" alt=""></a>
                                    </div>

                                </div>

                            </div>
                            <br>
                            <a href="tuixach/whitebeadedhandbag.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">
                                    White beaded handbag</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 100$</h6>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="tuixach/sqeezedior.html"><img class="imgbando"
                                                                               src="tuixach/tuixach2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="tuixach/sqeezedior.html"><img class="imgbando"
                                                                               src="tuixach/tuixach2,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="tuixach/sqeezedior.html"><img class="imgbando"
                                                                               src="tuixach/tuixach2,2.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="tuixach/sqeezedior.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">

                                    Squeeze DIOR</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 150$</h6>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="tuixach/lvhandbag.html"><img class="imgbando"
                                                                              src="tuixach/tuixach3.jpg" alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="tuixach/lvhandbag.html"><img class="imgbando"
                                                                              src="tuixach/tuixach3,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="tuixach/lvhandbag.html"><img class="imgbando"
                                                                              src="tuixach/tuixach3,2.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="tuixach/lvhandbag.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">LV handbag</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 120$ </h6>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="tuixach/squeezhandbag.html"><img class="imgbando"
                                                                                  src="tuixach/bop1.jpg" alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="tuixach/squeezhandbag.html"><img class="imgbando"
                                                                                  src="tuixach/bop1,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="tuixach/squeezhandbag.html"><img class="imgbando"
                                                                                  src="tuixach/bop1,3.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="tuixach/squeezhandbag.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">Squeeze hand
                                    black
                                </h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 260$</h6>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="giaydep/guccishoes.html"><img class="imgbando"
                                                                               src="giaydep/giay/giay1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="giaydep/guccishoes.html"><img class="imgbando"
                                                                               src="giaydep/giay/giay2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="giaydep/guccishoes.html"><img class="imgbando"
                                                                               src="giaydep/giay/giay3.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="giaydep/guccishoes.html"><img class="imgbando"
                                                                               src="giaydep/giay/giay4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a class="abanhang" href="giaydep/guccishoes.html">
                                <h6 style="text-align: center; font-weight: bolder;  color: white;">Gucci sneakers
                                </h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 200$ </h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="giaydep/jacuzzi.html"><img class="imgbando"
                                                                            src="giaydep/dep/depsuc2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="giaydep/jacuzzi.html"><img class="imgbando"
                                                                            src="giaydep/dep/depsuc2,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="giaydep/jacuzzi.html"><img class="imgbando"
                                                                            src="giaydep/dep/depsuc2,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="giaydep/jacuzzi.html"><img class="imgbando"
                                                                            src="giaydep/dep/depsuc2,3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a class="abanhang" href="">
                                <h6 style="font-weight: bolder; text-align: center;  color: white;">Jacuzzi with bow
                                </h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 120$</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="phukien/Conicalroundriangularlogo.html"><img class="imgbando"
                                                                                              src="phukien/non/non1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/Conicalroundriangularlogo.html"><img class="imgbando"
                                                                                              src="phukien/non/non1,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/Conicalroundriangularlogo.html"><img class="imgbando"
                                                                                              src="phukien/non/non1,3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="phukien/Conicalroundriangularlogo.html" class="abanhang">
                                <h6 style="font-weight: bolder; text-align: center;  color: white;">Conical round
                                    triangular logo</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 300$ </h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="phukien/Womenswatches1.html"><img class="imgbando"
                                                                                   src="phukien/dongho/dongho1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/Womenswatches1.html"><img class="imgbando"
                                                                                   src="phukien/dongho/dongho1,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/Womenswatches1.html"><img class="imgbando"
                                                                                   src="phukien/dongho/dongho1,3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a class="abanhang" href="phukien/Womenswatches1.html">
                                <h6 style="text-align: center; font-weight: bolder; color: white;"> Women's watches brand Armani
                                </h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 430$ </h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
        <div class="hinhchay">
            <div class="col-md-12">
                <x-breadcrumb category="WOMEN'S CLOTHING" action="{{route('frontend.all', ['category' => 'clothes'])}}" view="homepage"/>
                <div class="row">
                    <x-representative-products class="col-md-2" :itms="$clothes"/>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="hinhchay">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <x-breadcrumb category="WOMEN'S HANDBAGS" action="{{route('frontend.all', ['category' => 'handbags'])}}" view="homepage"/>
                        <div class="row">
                            <x-representative-products class="col-md-4" :itms="$handbags"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <x-breadcrumb category="WOMEN'S SHOES" action="{{route('frontend.all', ['category' => 'shoes'])}}" view="homepage"/>
                        <div class="row">
                            <x-representative-products class="col-md-4" :itms="$shoes"/>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <br>
        <br>
        <div class="hinhchay">
            <div class="col-md-12">
                <x-breadcrumb category="ACCESSORIES FOR WOMEN" action="{{route('frontend.all', ['category' => 'accessories'])}}" view="homepage"/>
                <div class="row">
                    <x-representative-products class="col-md-2" :itms="$accessories"/>
                </div>
            </div>
        </div>
        <br>
    </div>
</section>
    @push('custom-js')
        <script>
            $(document).ready(function() {
                let total_cart = {{$totalCart}};
                console.log(total_cart)
            });
        </script>
    @endpush
@endsection
