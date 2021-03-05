<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: black; opacity: 0.9;">
    <img class="img1" src="{{asset('asset/images/logo/logochinh.jpg')}}">
    <button style="background-color: black ; color: white; margin: auto;" class="navbar-toggler"
            data-target="#my-na" data-toggle="collapse" aria-controls="my-na" aria-expanded="false"
            aria-label="Toggle navigation">
        MENU OPTION
    </button>

    <ul class="navbar" style="margin:auto;">
        <div id="my-na" class="collapse navbar-collapse">
            @foreach(\App\Category::$staticList as $key => $groupCate)
                <li class="nav-item active dropdown">
                    <a style="font-weight: bolder; font-size: 0.7em; color: white; "
                       class="nav-link dropdown-toggle" data-toggle="dropdown" href="Pages.html" role="button"
                       aria-haspopup="true" aria-expanded="false">WOMEN'S {{strtoupper($key)}}</a>

                    <div class="dropdown-menu">
                        <a style="font-size: 0.7em;" class="dropdown-item" href="{{route('frontend.all', ['category' => $key])}}">All Women's {{$key}}</a>
                        @foreach($groupCate as $slug => $cate)
                            <a style="font-size: 0.7em;" class="dropdown-item" href="{{route('frontend.collection', $slug)}}">{{$cate['name']}}</a>
                        @endforeach
                    </div>
                </li>
            @endforeach
        </div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <div style="padding: 0.5em; border-radius: 0.5em;">
            <a id="my-cart" style="font-size: 1.5em; margin: auto; font-weight: bolder; color: white" href="{{route('frontend.cart.index')}}">
                <i style="color: white;" class="fa fa-shopping-bag"></i>(<span id="total-cart">{{$totalCart}}</span>)
            </a>
        </div>

    </form>
</nav>
<br><br><br><br>
