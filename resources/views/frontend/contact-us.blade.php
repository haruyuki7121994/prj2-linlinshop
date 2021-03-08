@extends('frontend.layout.master')
@section('content')
<section>
    <div class="container">        
        <div class="borderlogin">
            <h2 style="text-align: center; font-weight: bolder; font-size: 3em" >Information</h2>
            <p style="text-align: center;">Contact here for assistance <br>
                <a class="a12" href="mailtoiphoneboy46@gmail.com">iphoneboy46@gmail.com </a>
            </p>
            <p class="p1" style="text-align: center;">
                Phone Number: 037674865
            </p>
            <p style="text-align: center;">
                Map
            </p>
            <p style="text-align: center;">Address: 20, Street 1B, An Lạc Ward, Bình Tân District, Hồ Chí Minh City</p>
            <div>
                <img class="img2" src="diachi.jpg" usemap="#bando">
                <map name="bando"><area shape="circle" coords="130px 150px 50px 800px"
                                        href="https://maps.app.goo.gl/bBr2ymvSrSuFJbfw6"> </map>
            </div>
        </div>
        <br><br>
    </div>
</section>
@endsection
