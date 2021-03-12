@php $footer = \App\Banner::where('position', 'Footer')->where('is_active', \App\Banner::ACTIVE)->first() @endphp
<footer>
    <div style="background-color: black; padding: 1em;">
        <div class="container">
            <div class="col-md-12 col-sm-auto">
                <div class="row">
                    <div class="col-md-3">
                        <h2 style="color: white; font-size: 1.2em; ">NAVIGATION</h2>

                        <nav>

                            <ul class="navbar-nav">
                                <li><a class="a4" href="{{route('frontend.home')}}">HOME</a></li>
                                <li><a class="a4" href="{{route('frontend.all')}}">CATALOGS</a></li>
                                <li><a class="a4" href="{{route('frontend.contact')}}">CONTACT US</a></li>
                                @if(!Auth::check())
                                <li><a class="a4" href="{{route('auth.login.index')}}">LOGIN</a></li>
                                <li><a class="a4" href="{{route('auth.register.index')}}">SIGN UP</a></li>
                                @else
                                <li><a class="a4" href="{{route('auth.profile.index')}}">PROFILE</a></li>
                                <li><a class="a4" href="{{route('auth.logout')}}">LOGOUT</a></li>
                                @endif
                            </ul>

                        </nav>

                    </div>

                    <div class="col-md-3">
                        <p style="color: white; font-size: 1.2em;">
                            INFORMATION
                        </p>
                        <p style="color: white; font-size: 0.7em;">
                            PHONE NUMBER: 0927110910

                        </p>
                        <p style="font-size: 0.7em; color:white;">
                            ADDRESS: 20 STREET 1B AN LAC WARD, BINH TAN DISTRICT, HO CHI MINH CITY
                        </p>

                        <p style="font-size: 0.7em; color: white;">@LinLinShop</p>

                    </div>

                    <div class="col-md-3">
                        <nav>
                            <p style="color: white; font-size: 1.2em;">FAQ</p>
                            <ul class="navbar-nav">
                                <li><a class="a4" href="{{route('frontend.transport')}}">TRANSPORT</a></li>
                                <li><a class="a4" href="{{route('frontend.warranty')}}">WARRANTY POLICY
                                    </a></li>
                                <li><a class="a4" href="{{route('frontend.term')}}">TERM OF USE</a></li>
                            </ul>
                        </nav>
                    </div>

                    @if($footer) {!! $footer->image_url !!} @endif

                </div>
            </div>
        </div>

    </div>

</footer>
