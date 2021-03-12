@extends('frontend.layout.master')
@section('content')
@php $header = \App\Banner::where('position', 'Header')->where('is_active', \App\Banner::ACTIVE)->first() @endphp
<section>
    <div class="container">

        @if($header) {!! $header->image_url !!} @endif

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

        @if(count($saleProducts) > 0)
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
                    <x-representative-products class="col-md-3" :itms="$saleProducts"/>
                </div>
            </div>
        </div>
        @endif

        <br>

        <div class="hinhchay">
            <div class="col-md-12">
                <x-breadcrumb category="WOMEN'S CLOTHING" action="{{route('frontend.all', ['category' => 'clothes'])}}" view="homepage"/>
                <div class="row">
                    <x-representative-products class="col-md-2"  :itms="$clothes"/>
                </div>
            </div>
        </div>
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

            </div>
        </div>
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
