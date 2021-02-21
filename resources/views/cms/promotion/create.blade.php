@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Promotion" action="Create" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Create New Promotion</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" >

                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                            <div class="row row-sm" style="margin-bottom: 15px">

                                <div class="input-group col-md-12">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            From Date:
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                                </div>
                            </div>

                            <div class="row row-sm" style="margin-bottom: 15px">
                                <div class="input-group col-md-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            To Date:
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                                </div>
                            </div>

                            <div class="row row-sm" style="margin-bottom: 15px">
                                <div class="input-group col-md-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            %
                                        </div>
                                    </div><input class="form-control" placeholder="Percentage" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" placeholder="Note" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" class="dropify" data-height="200" />
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
