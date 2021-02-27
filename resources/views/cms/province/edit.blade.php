@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Province" action="Create" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Edit Province</h4>
                    </div>
                    <div class="card-body pt-0">
                        @include('cms.layout.message')
                        <form class="form-horizontal" method="post" action="{{route('cms.province.update',$province->id)}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" value="{{old('name',$province->name)}}" class="form-control" id="inputName" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <select name="type" id="" class="form-control">
                                    <option value="Tỉnh" {{old('type', $province->type) === 'Tỉnh' ? 'selected' : ''}}>Tỉnh</option>
                                    <option value="Thành phố Trung ương" {{old('type', $province->type) === 'Thành phố Trung ương' ? 'selected' : ''}}>Thành phố Trung ương</option>
                                </select>
                            </div>
                            <div class="form-group mb-0 justify-content-end">
                                <label for="inputName">Status: </label>
                                <input type="hidden" name="is_active" id="btn-active" value="{{old('is_active', $province->is_active)}}">
                                <div class="main-toggle main-toggle-secondary {{$province->is_active == \App\Province::ACTIVE ? 'on' : ''}}">
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
@endsection
