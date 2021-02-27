@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Product" action="Edit" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Edit Attributes</h4>
                    </div>
                    <div class="card-body pt-0">
                        @include('cms.layout.message')
                        <form class="form-horizontal" method="post" action="{{route('cms.product.attr.update', $productAttr->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" disabled value="{{$productAttr->product->name}}">
                            </div>

                            <div class="form-group">
                                <select name="size_id" id="" class="form-control">
                                    @foreach($sizes as $size)
                                    <option value="{{$size->id}}" {{old('size_id', $productAttr->size->id) == $size->id ? 'selected' : ''}}>{{$size->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="color_id" id="" class="form-control">
                                    @foreach($colors as $color)
                                        <option value="{{$color->id}}" {{old('color_id', $productAttr->color->id) == $color->id ? 'selected' : ''}}>{{$color->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <img src="{{$productAttr->images ? env('APP_URL') . $productAttr->images->url : ''}}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="">New Image</label>
                                <input type="file" class="form-control" id="inputName" name="image_url">
                            </div>

                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="submit" class="btn btn-secondary">Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
@endsection

