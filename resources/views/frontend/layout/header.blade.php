<header>
    @include('frontend.layout.navbar')
    <h1
        style="text-align: center; font-size: 3.5em; font-weight: bolder; font-family: Verdana, Geneva, Tahoma, sans-serif;">
        LinLin Store</h1>
    <div class="container">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <nav class="nav nav-fill" style="background-color: whitesmoke;">
                <li class="nav-item">
                    <a style="font-size: 1.2em; color:black; " class="nav-link" href="{{route('frontend.home')}}"><i
                            class="fas fa-home"></i> HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="font-size: 1.2em; color:black; " class="nav-link" href="{{route('frontend.all')}}"><i
                            class="fas fa-store"></i> CATALOGS</a>
                </li>
                <li class="nav-item">
                    <a style="font-size: 1.2em; color:black;" class="nav-link" href="{{route('frontend.contact')}}"><i
                            class="fas fa-id-card"></i> CONTACT US</a>
                </li>
                @if(!Auth::check())
                    <li class="nav-item">
                        <a style="font-size: 1.2em; color:black;" class="nav-link" href="{{route('auth.login.index')}}"><i
                                class="fas fa-lock"></i> LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 1.2em; color:black;" class="nav-link" href="{{route('auth.register.index')}}"><i
                                class="fas fa-user-plus"></i> SIGN UP</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a style="font-size: 1.2em; color:black;" class="nav-link" href="{{route('auth.profile.index')}}"><i
                                class="fas fa-lock"></i> PROFILE</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 1.2em; color:black;" class="nav-link" href="{{route('auth.logout')}}"><i
                                class="fas fa-user-plus"></i> LOGOUT</a>
                    </li>
                @endif

                <li class="nav-item">
                    <a style="font-size: 1.2em; color:black;" class="nav-link" data-toggle="modal"
                       href="#modalSearch"> <i class="fas fa-search"></i> SEARCH</a>
                </li>
            </nav>
        </div>



    </div>

    <div class="modal fixed-right fade" id="modalSearch" tabindex="-1" role="dialog" style="display: none;"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content">

                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x" aria-hidden="true"></i>
                </button>

                <!-- Header-->
                <div class="modal-header line-height-fixed font-size-lg">
                    <strong class="mx-auto">Search Products</strong>
                </div>

                <!-- Body: Form -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="sr-only" for="modalSearchCategories">Categories:</label>
                            <select class="custom-select" id="modalSearchCategories">
                                <option selected="">All Categories</option>
                                <option>WOMEN'S CLOTHING</option>
                                <option>WOMEN'S SHOES</option>
                                <option>WOMEN'S HANDBAGS</option>
                                <option>ACCESSORIES FOR WOMEN</option>
                            </select>
                        </div>
                        <div class="input-group input-group-merge">
                            <input class="form-control" type="search" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-border" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</header>
