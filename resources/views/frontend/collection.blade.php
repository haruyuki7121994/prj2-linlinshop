@extends('frontend.layout.master')
@section('content')
    <section>
        <div class="container">
            <div class="sanpham">
                <div class="col-md-12">
                    <marquee style="color: black; background-color:white; margin: auto; border-radius: 1em;">- - - - Welcome to our store. Wish
                        you have a happy and happy shopping day. Thank you
                        - - - - </marquee>
                    <div style="display: block;background-color: black; padding: 0.5em; ">
                        <h1 style="text-align: center; font-size: 2em; color: white; font-weight: bolder;">{{$category->name}}</h1>
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
