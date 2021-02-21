@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Size" action="Create" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Create New Size</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" >

                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
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
@endsection
