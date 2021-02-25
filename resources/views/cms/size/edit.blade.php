@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Category" action="Create" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Create New Category</h4>
                    </div>
                    <div class="card-body pt-0">
                        @include('cms.layout.message')
                        <form class="form-horizontal" method="post" action="{{route('cms.size.update', $size->id)}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input type="text" value="{{old('name', $size->name)}}" class="form-control" id="inputName" name="name" placeholder="Name">
                            </div>

                            {{--                            <div class="form-group">--}}
                            {{--                                <textarea class="form-control" placeholder="Note" rows="10"></textarea>--}}
                            {{--                            </div>--}}
                            <div class="form-group mb-0 justify-content-end">
                                <label for="inputName">Status: </label>
                                <input type="hidden" name="is_active" id="btn-active" value="{{old('is_active', $size->is_active)}}">
                                <div class="main-toggle main-toggle-secondary {{$size->is_active == \App\Size::ACTIVE ? 'on' : ''}}">
                                    <span></span>
                                </div>
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
    <!-- Container closed -->
@endsection

@push('custom-js')
    <!-- Internal form-elements js -->
    <script src="{{asset('cms/assets/js/form-elements.js')}}"></script>
    <script>
        $( document ).ready(function() {
            $('.main-toggle').click(function() {
                let className = this.className
                className.includes(' on') ? $('#btn-active').val(1) : $('#btn-active').val(0)
            });
        });
    </script>
@endpush
