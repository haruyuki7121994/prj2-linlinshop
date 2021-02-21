@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Transport" action="Create" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Create New Transport</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" >

                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Select Province</option>
                                    <option value="">New York</option>
                                    <option value="">California</option>
                                    <option value="">Seattle</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Price">
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
