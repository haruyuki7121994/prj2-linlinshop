@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Banner" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
{{--                    <div>--}}
{{--                        <div class="col-lg-4" style="margin-top: 20px"><a href="{{route('cms.banner.create')}}"><button class="btn btn-primary">Create</button></a></div>--}}

{{--                    </div>--}}
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Banner Table</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Position</th>
                                    <th>Selection</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banners as $banner)
                                    <tr>
                                        <th scope="row">{{$banner->id}}</th>
                                        <td>{{$banner->position}}</td>
                                        <td>
                                            @if($banner->is_active == \App\Product::IS_FEATURED)
                                                <a class="badge badge-success" href="#">Yes</a>
                                            @else
                                                <a class="badge badge-danger" href="#">No</a>
                                            @endif
                                        </td>
                                        <td>
                                            <x-button classType="success">
                                                <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                                {{route('cms.banner.edit', $banner->id)}}
                                            </x-button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- bd -->
                        {{ $banners->links() }}
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
@endsection
