@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Province" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div>
                            <div class="col-lg-4" style="margin-top: 20px"><a href="{{route('cms.province.create')}}"><button class="btn btn-primary">Create</button></a></div>

                        </div>
                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Province Table</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        @include('cms.layout.message')
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($provinces as $province)
                                    <tr>
                                        <th scope="row">{{$province->id}}</th>
                                        <td>{{$province->name}}</td>
                                        <td>{{$province->type}}</td>
                                        <td>
                                            @if($province->is_active == \App\Province::ACTIVE)
                                                <a class="badge badge-success" href="#">Active</a>
                                            @else
                                                <a class="badge badge-danger" href="#">Inactive</a>
                                            @endif
                                        </td>
                                        <td>
                                            <x-button classType="success">
                                                <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                                {{route('cms.province.edit', $province->id)}}
                                            </x-button>
                                            <x-delete-form>
                                                {{route('cms.province.destroy', $province->id)}}
                                            </x-delete-form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- bd -->
                        {{ $provinces->links() }}
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
@endsection
