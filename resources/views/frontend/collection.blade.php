@extends('frontend.layout.master')
@section('content')
    @php $header = \App\Banner::where('position', 'Header')->where('is_active', \App\Banner::ACTIVE)->first() @endphp
    <section>
        <div class="container">
            <div class="sanpham">
                <div class="col-md-12">
                    @if($header) {!! $header->image_url !!} @endif
                    <div style="display: block;background-color: black; padding: 0.5em; ">
                        <h1 style="text-align: center; font-size: 2em; color: white; font-weight: bolder;">{{$category->name ?? $category}}</h1>
                    </div>
                    <br>
                    <div class="row">
                        <x-representative-products :itms="$products" class="col-md-3"/>
                    </div>
                </div>
                <br>
            </div>
            <br>
        </div>
    </section>
@endsection
