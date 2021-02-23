<!-- breadcrumb -->
@switch($view)
    @case('homepage')
    <div style="display: block; background-color: black; padding: 0.5em;">

        <h1 style="text-align: center; font-size: 1.5em; color: white;">
            {{$category}}</h1>
        <a style="text-align: center; display: block; color: white; font-size: 0.5em; text-decoration: none;" href="{{$action}}">See more</a>
    </div>
    <br>
    @break

    @default
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{$category}}</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{$action}}</span>
            </div>
        </div>
    </div>
@endswitch
<!-- breadcrumb -->
