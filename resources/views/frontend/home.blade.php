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

            <div class="bordercaro">
                <div id="carousel" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselId" data-slide-to="1"></li>
                        <li data-target="#carouselId" data-slide-to="2"></li>
                        <li data-target="#carouselId" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <a href="quan ao/Setoftshirtsandjeansskirts.html"><img class="imgcaro"
                                                                                   src="home/home1.jpg" alt=""></a>
                            <div class="carousel-caption d-none d-md-block"
                                 style="width: 30%; background-color: black; opacity: 0.8; margin: auto;">
                                <a href="quan ao/Setoftshirtsandjeansskirts.html"
                                   style="font-weight: bolder; font-size: 1em; color: white; text-decoration: none;">
                                    Set of t-shirts and jeans skirts</a>
                                <h5>Price: 120$</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="quan ao/reddress1.html"><img class="imgcaro" src="home/home2.jpg" alt=""></a>
                            <div class="carousel-caption d-none d-md-block"
                                 style="width: 30%; background-color: black; opacity: 0.8; margin: auto;">
                                <a href="quan ao/reddress1.html"
                                   style="font-weight: bolder; font-size: 1em; color: white; text-decoration: none;">Red
                                    Dress </a>
                                <h5>Price: 120$</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="giaydep/slippers1.html"><img class="imgcaro" src="home/home3.jpg" alt=""></a>
                            <div class="carousel-caption d-none d-md-block"
                                 style="width: 30%; background-color: black; opacity: 0.8; margin: auto;">
                                <a href="giaydep/slippers1.html"
                                   style="font-weight: bolder; font-size: 1em; color: white; text-decoration: none;">
                                    Slippers NY</a>
                                <h5>Price: 100$</h5>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <a href="tuixach/sqeezedior.html"><img class="imgcaro" src="home/home5.jpg" alt=""></a>
                            <div class="carousel-caption d-none d-md-block"
                                 style="width: 30%; background-color: black; opacity: 0.8; margin: auto;">
                                <a href="tuixach/sqeezedior.html"
                                   style="font-weight: bolder; font-size: 1em; color: white; text-decoration: none;">
                                    Squeeze DIOR</a>
                                <h5>Price: 150$</h5>
                            </div>
                        </div>


                    </div>
                    <a style="background-color: black; width: 50px; height: 100px; margin: auto;"
                       class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a style="background-color: black; width: 50px; height: 100px; margin: auto;"
                       class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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
                <div style="display: block; background-color: black; padding: 0.5em;">

                    <h1 style="text-align: center; font-size: 1.5em; color: white;">
                        WOMEN'S CLOTHING</h1>
                    <a style="text-align: center; display: block; color: white; font-size: 0.5em; text-decoration: none;" href="quan ao/quanaonu.html">See more</a>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="quan ao/reddress1.html"><img class="imgchay"
                                                                              src="quan ao/redfress/vaydo1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/redfress/reddress.html"><img class="imgchay"
                                                                                      src="quan ao/redfress/vaydo1,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/reddress1.html"><img class="imgchay"
                                                                              src="quan ao/redfress/vaydo1,3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="quan ao/reddress1.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white;">
                                    Red dress </h6>
                            </a>
                            <h6 style="text-align: center; color:white; font-weight: bolder;">Price: 120$ </h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="quan ao/Setoftshirtsandjeansskirts.html"><img class="imgchay"
                                                                                               src="quan ao/setdo/setdo2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Setoftshirtsandjeansskirts.html"><img class="imgchay"
                                                                                               src="quan ao/setdo/setdo2,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Setoftshirtsandjeansskirts.html"><img class="imgchay"
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

                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="quan ao/Setofclotheswith whiteclothes.html"><img class="imgchay"
                                                                                                  src="quan ao/setdo/setdo3.jpg" alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Setofclotheswith whiteclothes.html"><img class="imgchay"
                                                                                                  src="quan ao/setdo/setdo3,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Setofclotheswith whiteclothes.html"><img class="imgchay"
                                                                                                  src="quan ao/setdo/setdo3,3.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="quan ao/Setofclotheswith whiteclothes.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white; ">
                                    Set of clothes
                                    with
                                    white
                                    clothes</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 120$ </h6>

                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="quan ao/whitedress1.html"><img class="imgchay"
                                                                                src="quan ao/vaytrang/vaytrang2,1.jpg" alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/whitedress1.html"><img class="imgchay"
                                                                                src="quan ao/vaytrang/vaytrang2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/whitedress1.html"><img class="imgchay"
                                                                                src="quan ao/vaytrang/vaytrang2,2.jpg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="quan ao/whitedress1.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white; ">
                                    White dress
                                </h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 130$ </h6>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="quan ao/reddress3.html"><img class="imgchay"
                                                                              src="quan ao/redfress/vaydo3.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/reddress3.html"><img class="imgchay"
                                                                              src="quan ao/redfress/vaydo3,1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/reddress3.html"><img class="imgchay"
                                                                              src="quan ao/redfress/vaydo3,2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="quan ao/reddress3.html" class="abanhang">
                                <h6 style="text-align: center; font-weight: bolder; color: white; ">
                                    Short red skirt spread </h6>
                            </a>
                            <h6 style="text-align: center; color:white; font-weight: bolder;">Price: 120$ </h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="quan ao/Bluewhiteshirtsetd shortjeanskirt.html"><img
                                                class="imgchay" src="quan ao/setdo/setdo6.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Bluewhiteshirtsetd shortjeanskirt.html"><img
                                                class="imgchay" src="quan ao/setdo/setdo6,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="quan ao/Bluewhiteshirtsetd shortjeanskirt.html"><img
                                                class="imgchay" src="quan ao/setdo/setdo6,3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="quan ao/Bluewhiteshirtsetd shortjeanskirt.html" class="abanhang">
                                <h6
                                    style="text-align: center; font-weight: bolder; color: white; font-size: 0.6em;">

                                    Blue white shirt set and short jean skirt</h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 120$ </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="hinhchay">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div style="display: block;background-color: black; padding: 0.5em;">
                            <h1 style="text-align: center; font-size: 1.5em; color: white; ">WOMEN'S HANDBAGS</h1>
                            <a style="text-align: center; display: block; color: white; font-size: 0.5em; text-decoration: none;" href="tuixach/tuixach.html">See more</a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <a href="tuixach/whitebeadedhandbag.html"><img class="imgchay"
                                                                                               src="tuixach/tuisach1.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/whitebeadedhandbag.html"><img class="imgchay"
                                                                                               src="tuixach/tuisach1,2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="tuixach/whitebeadedhandbag.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white; ">
                                            White beaded handbag</h6>
                                    </a>
                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 100$</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">

                                                <a href="tuixach/sqeezedior.html"><img class="imgchay"
                                                                                       src="tuixach/tuixach2.jpg" alt=""></a>


                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/sqeezedior.html"><img class="imgchay"
                                                                                       src="tuixach/tuixach2,1.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/sqeezedior.html"><img class="imgchay"
                                                                                       src="tuixach/tuixach2,2.jpg" alt=""></a>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <a href="tuixach/sqeezedior.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white;  ">

                                            Squeeze DIOR</h6>
                                    </a>

                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 150$</h6>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">

                                                <a href="tuixach/lvhandbag.html"><img class="imgchay"
                                                                                      src="tuixach/tuixach3.jpg" alt=""></a>


                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/lvhandbag.html"><img class="imgchay"
                                                                                      src="tuixach/tuixach3,1.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/lvhandbag.html"><img class="imgchay"
                                                                                      src="tuixach/tuixach3,2.jpg" alt=""></a>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <a href="tuixach/lvhandbag.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white;  ">
                                            LV handbag</h6>
                                    </a>
                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 120$ </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="display: block;background-color: black; padding: 0.5em;">
                            <h1 style="text-align: center; font-size: 1.5em; color: white; ">WOMEN'S SHOES</h1>
                            <a style="text-align: center; display: block; color: white; font-size: 0.5em; text-decoration: none;" href="giaydep/giaydep.html">See more</a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <a href="giaydep/guccishoes.html"><img class="imgchay" src="giaydep/giay/giay1.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/guccishoes.html"><img class="imgchay" src="giaydep/giay/giay2.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/guccishoes.html"><img class="imgchay" src="giaydep/giay/giay3.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/guccishoes.html"><img class="imgchay" src="giaydep/giay/giay4.jpg" alt=""></a>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <a class="abanhang" href="giaydep/guccishoes.html">
                                        <h6 style="text-align: center; font-weight: bolder; color:white; ">
                                            Gucci sneakers</h6>
                                    </a>

                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 200$ </h6>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">

                                                <a href="giaydep/batashoes.html"><img class="imgchay"
                                                                                      src="giaydep/giay/giaybata.jpg" alt=""></a>


                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/batashoes.html"><img class="imgchay"
                                                                                      src="giaydep/giay/giaybata1,2.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/batashoes.html"><img class="imgchay"
                                                                                      src="giaydep/giay/giaybata1,3.jpg" alt=""></a>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <a href="giaydep/batashoes.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white; font-size: 0.8em">
                                            Bata shoes </h6>
                                    </a>

                                    <h6 style="text-align: center; color:white; font-weight: bolder;">Price: 100$
                                    </h6>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">

                                                <a href="giaydep/batashoes2.html"><img class="imgchay" src="giaydep/giay/giaybata2.jpg" alt=""></a>


                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/batashoes2.html"><img class="imgchay" src="giaydep/giay/giaybata2,1.jpg"
                                                                                       alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/batashoes2.html"><img class="imgchay" src="giaydep/giay/giaybata2,2.jpg"
                                                                                       alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/batashoes2.html"><img class="imgchay" src="giaydep/giay/giaybata2,3.jpg"
                                                                                       alt=""></a>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <a href="giaydep/batashoes2.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white; font-size: 0.8em">


                                            Women's sports shoes </h6>
                                    </a>

                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 100$
                                    </h6>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <a href="tuixach/squeezhandbag.html"><img class="imgchay"
                                                                                          src="tuixach/bop1.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/squeezhandbag.html"><img class="imgchay"
                                                                                          src="tuixach/bop1,2.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/squeezhandbag.html"><img class="imgchay"
                                                                                          src="tuixach/bop1,3.jpg" alt=""></a>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <a href="tuixach/squeezhandbag.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white;  ">
                                            Squeeze Handbag
                                        </h6>
                                    </a>

                                    <h6 style="text-align: center; color: white; font-weight: bolder; ">Price: 260$</h6>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">

                                                <a href="tuixach/multicolorbag1.html"><img class="imgchay"
                                                                                           src="tuixach/tuixach4.jpg" alt=""></a>


                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbag1.html"><img class="imgchay"
                                                                                           src="tuixach/tuixach4,1.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbag1.html"><img class="imgchay"
                                                                                           src="tuixach/tuixach4,2.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbag1.html"><img class="imgchay"
                                                                                           src="tuixach/tuixach4,3.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbag1.html"><img class="imgchay"
                                                                                           src="tuixach/tuixach4,4.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbag1.html"><img class="imgchay"
                                                                                           src="tuixach/tuixach4,5.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbag1.html"><img class="imgchay"
                                                                                           src="tuixach/tuixach4,6.jpg" alt=""></a>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <a href="tuixach/multicolorbag1.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white;  ">
                                            Multi-color bags of choice brand Gucci</h6>
                                    </a>

                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 100$</h6>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">

                                                <a href="tuixach/multicolorbagofchoice2.html"><img class="imgchay"
                                                                                                   src="tuixach/tuixach6.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbagofchoice2.html"><img class="imgchay"
                                                                                                   src="tuixach/tuixach6,1.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbagofchoice2.html"><img class="imgchay"
                                                                                                   src="tuixach/tuixach6,2.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbagofchoice2.html"><img class="imgchay"
                                                                                                   src="tuixach/tuixach6,3.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="tuixach/multicolorbagofchoice2.html"><img class="imgchay"
                                                                                                   src="tuixach/tuixach6,4.jpg" alt=""></a>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <a href="tuixach/multicolorbagofchoice2.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white;  ">

                                            Multi-color bags of choice
                                        </h6>
                                    </a>

                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 260$</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">

                                                <a href="giaydep/dowshoes1.html"><img class="imgchay"
                                                                                      src="giaydep/giay/giaybupbe.jpg" alt=""></a>


                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/dowshoes1.html"><img class="imgchay"
                                                                                      src="giaydep/giay/giaybupbe1.jpg" alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/dowshoes1.html"><img class="imgchay"
                                                                                      src="giaydep/giay/giaybupbe1,2.jpg" alt=""></a>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <a href="giaydep/dowshoes1.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white; font-size: 0.8em">
                                            Doll shoes NY</h6>
                                    </a>

                                    <h6 style="text-align: center; color:white; font-weight: bolder;">Price: 100$
                                    </h6>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">

                                                <a href="giaydep/dollshoes2.html"><img class="imgchay" src="giaydep/giay/giaybupbe2.jpg"
                                                                                       alt=""></a>


                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/dollshoes2.html"><img class="imgchay" src="giaydep/giay/giaybupbe2,1.jpg"
                                                                                       alt=""></a>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <a href="giaydep/dollshoes2.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white; font-size: 0.8em">
                                            Spearhead doll shoes</h6>
                                    </a>

                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 100$
                                    </h6>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bordershopping" style="overflow: auto;">
                                    <div id="carousel" class="carousel-fade " data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <a href="giaydep/highheeldollshoe2.html"><img class="imgchay" src="giaydep/giay/succaogot2.jpg"
                                                                                              alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/highheeldollshoe2.html"><img class="imgchay" src="giaydep/giay/succaogot2,1.jpg"
                                                                                              alt=""></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="giaydep/highheeldollshoe2.html"><img class="imgchay" src="giaydep/giay/succaogot2,2.jpg"
                                                                                              alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="giaydep/highheeldollshoe2.html" class="abanhang">
                                        <h6 style="text-align: center; font-weight: bolder; color: white;">
                                            High heeled doll shoes
                                        </h6>
                                    </a>
                                    <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 150$
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="hinhchay">
            <div class="col-md-12">
                <div style="display: block;background-color: black; padding: 0.5em;">
                    <h1 style="text-align: center; font-size: 1.5em; color: white; ">ACCESSORIES FOR WOMEN</h1>
                    <a style="text-align: center; display: block; color: white; font-size: 0.5em; text-decoration: none;" href="phukien/phukien.html">See more</a>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="phukien/Womenswatches2.html"><img class="imgchay" src="phukien/dongho/dongho3.jpg"
                                                                                   alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/Womenswatches2.html"><img class="imgchay" src="phukien/dongho/dongho3,1.jpg"
                                                                                   alt=""></a>
                                    </div>

                                    <div class="carousel-item">
                                        <a href="phukien/Womenswatches2.html"><img class="imgchay" src="phukien/dongho/dongho3,2.jpg"
                                                                                   alt=""></a>
                                    </div>



                                </div>

                            </div>
                            <br>
                            <a class="abanhang" href="phukien/Womenswatches2.html">
                                <h6 style="text-align: center; font-weight: bolder; color:white; ">
                                    Women's watches </h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 430$ </h6>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="phukien/Conicalroundriangularlogo.html"><img class="imgchay" src="phukien/non/non1.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/Conicalroundriangularlogo.html"><img class="imgchay" src="phukien/non/non1,2.jpg" alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/Conicalroundriangularlogo.html"><img class="imgchay" src="phukien/non/non1,3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="phukien/Conicalroundriangularlogo.html" class="abanhang">
                                <h6 style="font-weight: bolder; text-align: center; color: white; ">
                                    Conical round
                                    triangular
                                    logo</h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 300$ </h6>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a href="phukien/Womenswatches3.html"><img class="imgchay" src="phukien/dongho/dongho4.jpg"
                                                                                   alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/Womenswatches3.html"><img class="imgchay" src="phukien/dongho/dongho4,1.jpg"
                                                                                   alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a class="abanhang" href="phukien/Womenswatches3.html">
                                <h6 style="font-weight: bolder; text-align: center; color: white; ">
                                    Women's watches brand Gucci
                                </h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder; color: white;">
                                Price: 120$
                            </h6>

                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="phukien/glasses1.html"><img class="imgchay" src="phukien/matkinh/matkinh2.jpg"
                                                                             alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/glasses1.html"><img class="imgchay" src="phukien/matkinh/matkinh2,1.jpg"
                                                                             alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/glasses1.html"><img class="imgchay" src="phukien/matkinh/matkinh2,2.jpg"
                                                                             alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/glasses1.html"><img class="imgchay" src="phukien/matkinh/matkinh2,3.jpg"
                                                                             alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/glasses1.html"><img class="imgchay" src="phukien/matkinh/matkinh2,4.jpg"
                                                                             alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <a href="phukien/glasses1.html" class="abanhang">
                                <h6 style="font-weight: bolder; text-align: center; color: white; ">
                                    Glasses brand Chanel</h6>
                            </a>

                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 310$ </h6>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="phukien/glasses2.html"><img class="imgchay" src="phukien/matkinh/matkinh3.jpg"
                                                                             alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/glasses2.html"><img class="imgchay" src="phukien/matkinh/matkinh3,1.jpg"
                                                                             alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/glasses2.html"><img class="imgchay" src="phukien/matkinh/matkinh3,2.jpg"
                                                                             alt=""></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/glasses2.html"><img class="imgchay" src="phukien/matkinh/matkinh3,3.jpg"
                                                                             alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a class="abanhang" href="phukien/glasses2.html">
                                <h6 style="text-align: center; font-weight: bolder; color: white; ">
                                    Glasses
                                </h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 310$ </h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="bordershopping" style="overflow: auto;">
                            <div id="carousel" class="carousel-fade " data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

                                        <a href="phukien/glasses5.html"><img class="imgchay" src="phukien/matkinh/matkinh6.jpg"
                                                                             alt=""></a>


                                    </div>
                                    <div class="carousel-item">
                                        <a href="phukien/glasses5.html""><img class="imgchay" src="phukien/matkinh/matkinh6,1.jpg"
                                                                              alt=""></a>
                                    </div>

                                </div>

                            </div>
                            <br>
                            <a href="phukien/glasses5.html"" class="abanhang">
                            <h6 style="font-weight: bolder; text-align: center; color: white; ">
                                Glasses brand Gentle Monster color Brown
                            </h6>
                            </a>
                            <h6 style="text-align: center; color: white; font-weight: bolder;">Price: 310$
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
</section>
@endsection
