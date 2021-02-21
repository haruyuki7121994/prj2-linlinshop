@extends('cms.layout.master')
@section('content')
    @push('custom-css')
        <!-- Internal Spectrum-colorpicker css -->
        <link href="{{asset('cms/assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
    @endpush
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Color" action="Create" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Create New Color</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" >

                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label for="inputName">Pick Color: </label><input id="colorpicker" type="text">
                                        <input type="text" class="form-control" id="color" placeholder="Color">
                                    </div>
                                </div>


                            </div>
                            <div class="form-group mb-0 justify-content-end">
                                <label for="inputName">Status: </label>
                                <div class="main-toggle main-toggle-secondary on">
                                    <span></span>
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Create</button>
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
        <!--Internal  spectrum-colorpicker js -->
        <script src="{{asset('cms/assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
        <!-- Internal form-elements js -->
        <script>
            $( document ).ready(function() {
                $('#colorpicker').spectrum({
                    color: '#17A2B8'
                });
            });
        </script>
    @endpush
@endsection
